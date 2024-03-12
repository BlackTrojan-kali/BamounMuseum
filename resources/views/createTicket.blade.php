
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ticket</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
       <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <style>
        body{
            background-image: url('images/img4.jpeg');
            background-size: cover;
        }
    </style>
</head>
@if(Session::has('success'))
<script>

toastr.options = {
  "closeButton": false,
  "debug": false,
  "newestOnTop": false,
  "progressBar": true,
  "positionClass": "toast-top-right",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "5000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
}
    toastr.success("{{Session::get('success')}}")
</script>
@endif
<body class="font-normal">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script> 
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <a href="/" class="position fixed top-5  text-3xl right-5 p-5 text-white rounded-full  bg-pink-500/80 text-center"><i class="fa-solid fa-arrow-left"></i></a>
    <div class="absolute  text-white top-10  left-10 bg-black/50 md:w-8/12 rounded-lg p-5">
        <h1 class="font-bold text-2xl">Reserver un ticket</h1>

        <form action="{{route("createTheticket",$total)}}" method="POST">
            @csrf
            <div class="md:flex w-full gap-1">
                <div class="inputs md:w-6/12">
                    <label for="">Mode de Paiement:</label><br>
                    <div class="flex gap-4">
                    <input type="radio" name="payment" value="ORANGE" class=" rounded-full text-black">OM
                    <input type="radio" name="payment" value="MTN" class=" rounded-full text-black">MTN
                    <input type="radio" name="payment" value="PAY" class=" rounded-full text-black">paypal
                    @if ($errors->has("payment"))
                    <br>
                        <span class="text-red-500">{{$errors->first("payment")}}</span>
                    @endif
                </div>
                </div>
               
            </div>
            <div class="md:flex w-full gap-1">
                <div class="inputs md:w-6/12">
                    <label for="">Nom complet:</label><br>
                    <input type="text" name="name" class="md:w-11/12 rounded-full text-black">
                    @if ($errors->has("name"))
                    <br>
                        <span class="text-red-500">{{$errors->first("name")}}</span>
                    @endif
                </div>
                <div class="inputs md:w-6/12">
                    <label for="">phone:</label><br>
                    <input type="text" name="phone" class="md:w-11/12 rounded-full text-black">
                    @if ($errors->has("phone"))
                    <br>
                        <span class="text-red-500">{{$errors->first("phone")}}</span>
                    @endif
                </div>
            </div>
            <div class="md:flex md:justify-between mt-2">
                <div class="inputs ">
                    <label for="">type:</label><br>
                    <select name="type" id="" class="text-black rounded-full w-full ">
                        <option value="personnel">Personnel</option>
                        <option value="Familliale">Familliale</option>
                    </select>
                    @if ($errors->has("type"))
                    <br>
                        <span class="text-red-500">{{$errors->first("type")}}</span>
                    @endif
                </div>
                <div class="inputs">
                    <label for="">Pays:</label><br>
                    <input type="text" name="country" class="rounded-full text-black">
                    @if ($errors->has("country"))
                    <br>
                        <span class="text-red-500">{{$errors->first("country")}}</span>
                    @endif
                </div>
                <div class="inputs">
                    <label for="">Nombre de personnes:</label><br>
                    <input name="qty" type="number" class="qty rounded-full text-black">
                    @if ($errors->has("qty"))
                    <br>
                        <span class="text-red-500">{{$errors->first("qty")}}</span>
                    @endif
                </div>
            </div>
            <div class="md:flex gap-2">

                <div>
                    <label for="">email:</label><br>
                    <input type="email" name="email" class="rounded-full w-full text-black">
                    @if ($errors->has("email")) <br>
                        <span class="text-red-500">{{$errors->first("email")}}</span>
                    @endif
                </div>
                <div>
                    <label for="">Date de visite:</label><br>
                    <input type="date" name="date" class="rounded-full w-full text-black">
                    @if ($errors->has("date"))
                     <br>
                        <span class="text-red-500">{{$errors->first("date")}}</span>
                    @endif
                </div>
                <div class="mt-6">
                    <input type="submit" value="valider" class="bg-red-500 p-2  font-bold cursor-pointer rounded-full w-full">
                </div>
            </div>
        </form>
        <h2 class="total text-2xl font-bold mt-2" id={{$total}}></h2>
    </div>

    <script>
        $(document).ready(function(){
        total = $(".total").attr("id")
        $(".total").text("Total: "+total+"Xaf")
        $('.qty').change(function(e){
            e.preventDefault()
            total = parseInt($(".total").attr("id"))
            total =total
            num = parseInt($(this).val())
            total = total * num
            $(".total").text("Total:"+total+" Xaf")
        })
    })
    </script>
</body>
</html>