<?php

namespace App\Http\Controllers;
use Hachther\MeSomb\Operation\Payment\Collect;
use Illuminate\Http\Request;
use App\Models\Ticket;
use Dompdf\Dompdf;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
class ticketsController extends Controller
{
    //
    public function home(){
        return view("homepage");
    }
    public function create(){
        return view("createTicket",["total"=>5000,]);
    }
    public function store(Request $request,$total){
        $ticket = new Ticket;
        $request->validate([
            "payment"=>"string|required",
            "name"=>"string|required|min:5",
            "phone"=>"numeric|required",
            "type"=>"string|required",
            "country"=>"string|min:2|required",
            "qty"=>"string|numeric|required",
            "email"=>"email|nullable",
            "date"=>"date|required"
        ]);
       
        $payment = new Collect("237400001019",100, $request->payment, 'CM');

        $payment = $payment->pay();

        if($payment->success){
         
        $ticket->name_customer =  $request->name;
        $ticket->phone = $request->phone;
        $ticket->email = $request->email;
        $ticket->country = $request->country;
        $ticket->price = $total * $request->qty;
        $ticket->paymentMode = $request->payment;
        $ticket->ticketType = $request->type;
        $ticket->numberCustomers = $request->qty;
        $ticket->reservedDate = $request->date;
        $ticket->save();
        $qrCode = QrCode::size(200)->generate($ticket);
// instantiate and use the dompdf class
$fullpath = public_path('images/logo.jpg');
$dompdf = new Dompdf();
$html = '
<html><head>
<style>
    .Ticket{
        position: relative;
        width:1000px;
        display: flex;
        text-align: center;
        justify-content: space-between;
    }
    .title1{
        color:rgb(209, 65, 89);
        font-size: 1.5rem;
    }
    .section1{
        position: absolute;
        top: 0;
        left: 0;
    }
    .section2{
        position: absolute;
        top: 0;
        width: 50%;
        left:20%;
    }
    .section3{
        position: absolute;
        right: 0;
        top:0;
    }

    .date{
        position: absolute;
        bottom: -25px;
        left: -200px;
    }
    .country{
        position: absolute;
        bottom: -25px;
        left: 20px;
    }
    .type{
        position: absolute;
        bottom: -25px;
        left: 200px;
    }


    .title2{
        font-weight: bold;
        font-size: 2rem;
    }
    .info{
        color: gray;
    }
    .details{
        display: flex;
        width: 100%;
        justify-content: space-between;
    }
    .title3{
        color: rgb(230, 25, 93);
        font-size: 1.2rem;
    }
</style>
</head>
<body>

<div class="Ticket">
    <div class="section1">
        <img  src="data:image/png;base64,'.base64_encode(file_get_contents($fullpath)).'; width="150 px" height="150px" >
    </div>
    <div class="section2">
        <h1 class="title1">www.visitBamounRoyalMuseum.com</h1>
        <h1 class="title2">Visite du musee</h1>
        <p class="infos">'.$ticket->name_customer.' <br>
            '.$ticket->phone.'<br>
            '.$ticket->email.'
        </p>
            <div class="date">
                <h2 class="title3">Date</h2>
                <p>'.$ticket->reservedDate.'</p>
            </div>
            <div class="country">
                <h2 class="title3">Pays</h2>
                <p>'.$ticket->country.'</p>
            </div>
            <div class="type">
                <h2 class="title3">type</h2>
                <p>'.$ticket->ticketType.'</p>
            </div>
    </div>
    <div class="section3">
        <p class="identify">Code:'.$ticket->id.'</p>
        <div>
        <img src="data:image/png;base64,'.base64_encode(QrCode::size(200)->generate($ticket)).' ">
        </div>
        <p class="text-red text-xl">nombre de personnes : '.$ticket->numberCustomers.'</p>
    </div>
    </div>
</body>
</html>
';

$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper(array(0, 0, 256, 812), 'landscape');
// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();
        return back()->withSuccess("Billet reserve avec success")->download($dompdf,['location'=>'/']);
        
     } else {
            // fire some event, redirect to error page
        }
    } 
}
