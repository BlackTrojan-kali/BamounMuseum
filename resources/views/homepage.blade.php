@extends("appLayout")
@section("content")
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
<div id="home" class="hero-section w-full bg-white">
<div id="default-carousel" class="relative w-full mt-24" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
       
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="/images/img6.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 4 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="/images/img4.jpeg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 5 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="/images/img1.jpeg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
    </div>
    <!-- Slider indicators -->
    <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
    </div>
    <!-- Slider controls -->
    <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <i class="fa-solid fa-angle-left"></i>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <i class="fa-solid fa-angle-right"></i>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>
<div class="px-2 md:mx-80 text-center p-2">
    <h1 class="text-2xl font-thin underline-offset-4">Titre 1</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim praesentium odio consectetur culpa corrupti laborum ea, rem nihil quo? Maxime error, quam facilis, voluptas eius fugit ullam voluptatibus amet perspiciatis deserunt, necessitatibus inventore repudiandae quas quod quo provident veniam cupiditate doloribus culpa nobis adipisci itaque deleniti perferendis autem. Sit, dolores!</p>
</div>
<div id="museum" class="block  md:gap-5 md:flex">
        <img  data-aos="fade-down-right" data-aos-duration="2000" class="w-full md:w-6/12" src="/images/img5.jpeg" alt="">
        <p class="p-3 w-full text-justify md:p-20 "> Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis autem sint assumenda? Dolorem voluptates, quia perferendis similique quae dolorum sapiente cupiditate! Eius itaque omnis tempora adipisci cum earum libero hic nostrum iure modi. Culpa est nihil amet doloribus ullam quo delectus. Exercitationem magnam nisi sapiente repellendus! Ipsum quia blanditiis delectus!</p></div>

 <div id="palace" class="block mt-2 md:gap-5 md:flex">
    <p class="p-3 w-full text-justify md:p-20 "> Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis autem sint assumenda? Dolorem voluptates, quia perferendis similique quae dolorum sapiente cupiditate! Eius itaque omnis tempora adipisci cum earum libero hic nostrum iure modi. Culpa est nihil amet doloribus ullam quo delectus. Exercitationem magnam nisi sapiente repellendus! Ipsum quia blanditiis delectus!</p>
            
    <img  data-aos="fade-down-left" data-aos-duration="2000" class="w-full md:w-6/12" src="/images/img4.jpeg" alt="">
        </div>

        <div class="px-2 md:mx-80 text-center p-3">
            <h1 class="text-2xl font-thin underline-offset-4">Titre 1</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim praesentium odio consectetur culpa corrupti laborum ea, rem nihil quo? Maxime error, quam facilis, voluptas eius fugit ullam voluptatibus amet perspiciatis deserunt, necessitatibus inventore repudiandae quas quod quo provident veniam cupiditate doloribus culpa nobis adipisci itaque deleniti perferendis autem. Sit, dolores!</p>
        </div>

        <div id="culture" class="block  md:gap-5 md:flex ">
            <img class="w-full md:w-6/12" data-aos="flip-left" data-aos-duration="2000" src="/images/img6.jpg" alt="">
            <p class="p-3 w-full text-justify md:p-20 "> Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis autem sint assumenda? Dolorem voluptates, quia perferendis similique quae dolorum sapiente cupiditate! Eius itaque omnis tempora adipisci cum earum libero hic nostrum iure modi. Culpa est nihil amet doloribus ullam quo delectus. Exercitationem magnam nisi sapiente repellendus! Ipsum quia blanditiis delectus!</p></div>
    

            <div id="culture" class="block pt-4  md:justify-between md:flex md:p-20">
                <img class="w-full md:w-5/12" data-aos="zoom-out-up" data-aos-duration="2000" src="/images/img7.avif" alt="">
                <img class="w-full md:w-5/12" data-aos="zoom-out-up" data-aos-duration="2000" src="/images/img8.avif" alt="">
            </div>
        
        <div id="culture" class="block  md:gap-5 md:flex">
            <p class="p-3 w-full text-justify md:p-20 "> Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis autem sint assumenda? Dolorem voluptates, quia perferendis similique quae dolorum sapiente cupiditate! Eius itaque omnis tempora adipisci cum earum libero hic nostrum iure modi. Culpa est nihil amet doloribus ullam quo delectus. Exercitationem magnam nisi sapiente repellendus! Ipsum quia blanditiis delectus!</p>
            <p class="p-3 w-full text-justify md:p-20 "> Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis autem sint assumenda? Dolorem voluptates, quia perferendis similique quae dolorum sapiente cupiditate! Eius itaque omnis tempora adipisci cum earum libero hic nostrum iure modi. Culpa est nihil amet doloribus ullam quo delectus. Exercitationem magnam nisi sapiente repellendus! Ipsum quia blanditiis delectus!</p></div>
    
    <div class="w-full overflow-x-hidden">
    <div class="flex w-full justify-between animate-marquee whitespace-nowrap ">
        <img src="/images/logo-unesco.jpg" class="w-40" alt="">
        <img src="/images/logo-unesco.jpg" class="w-40" alt="">
        <img src="/images/logo-unesco.jpg" class="w-40" alt="">
        <img src="/images/logo-unesco.jpg" class="w-40" alt="">
        <img src="/images/logo-unesco.jpg" class="w-40" alt="">
    </div>
</div>
</div>
@endsection