<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bamoun Royal Museum</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
       <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="font-normal transition-all duration-200 overflow-x-hidden">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script> 
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
  <header class="w-full bg-black opacity-80 text-white py-5 text-xl fixed top-0 px-4 flex justify-between z-50">
    <img src="/images/logo.jpg" class="w-20 h-10 rounded-lg" alt="">
    <nav class="links   hidden md:text-xl md:flex md:justify-between md:gap-10">
        <a href="#home" class="transition-all duration-200  hover:text-blue-400">Accueil</a>
        <a href="#museum" class="transition-all duration-200  hover:text-blue-400">Musee</a>
        <a href="#palace" class="transition-all duration-200  hover:text-blue-400">Palais</a>
        <a href="#culture" class="transition-all duration-200  hover:text-blue-400">Culture</a>
    </nav>
    <button class="text-base bg-blue-500 flex text-white border border-black/0 p-2 rounded-full transition-all duration-200   md:text-base font-bold  hover:border hover:bg-blue-500/0 hover:border-blue-500">
        <a href="{{route("createTicket")}}" class="flex"><i class="fa-solid fa-ticket mx-1 mt-1 hidden md:block"></i>  <p> Acheter un Ticket</p></a>
    </button>

    <div class="icons text-2xl md:hidden"><i class="closer fa-solid fa-bars"></i></div>
  </header>
  @yield('content')
<footer class="md:flex mt-2 w-full justify-between py-10 px-4 bg-slate-900 text-white text-center">
    <div class="md:flex gap-1"><h1>Logo</h1>
    <p>Copy &copy; 2024-RDB</p></div>
    <div><p>visiteMuseum@contact.com</p></div>
    <div><i class="fa-brands fa-facebook"></i> <i class="fa-brands fa-instagram"></i><i class="fa-brands fa-x-twitter"></i></div>
</footer>
<script>
    AOS.init();
  </script>
<script>
    $(document).ready(function(){
        $(".closer").on("click",function(e){
            e.preventDefault()
           $('.links').toggleClass("hidden")
           $('.links').toggleClass("nav-active")
        })
    })
</script>
</body>
</html>