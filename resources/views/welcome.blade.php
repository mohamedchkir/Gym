<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="https://www.flaticon.com/svg/static/icons/svg/2913/2913448.svg" type="image/x-icon"/>
        <title>GYM</title>
        <link rel="icon" type="images/x-icon" href="https://www.w3docs.com/favicon.ico" />
        <!-- Fonts -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
         <!-- Tailwind-->
        <script src="https://cdn.tailwindcss.com"></script>
        <!-- AOS (animate on scroll) -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" integrity="sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Styles -->
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">

 <!-- Navbar -->
 <nav
 class="top-0 absolute z-50 w-full flex flex-wrap items-center justify-between px-2 py-3 navbar-expand-lg"
>

 <div
   class="container px-4 mx-auto flex flex-wrap items-center justify-between"
 >
   <div
     class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start"
   >
     <a
       class="text-lg font-bold leading-relaxed inline-block mr-4 py-2 whitespace-no-wrap uppercase text-white"
       href="https://www.creative-tim.com/learning-lab/tailwind-starter-kit#/presentation"
       ><span class="text-red-500"> GYM</span> MASTER</a
     >
     <div class="lg:hidden">
        <button class="navbar-burger flex items-center text-gray-400 p-3">
            <svg class="block h-4 w-4 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <title>Mobile menu</title>
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
            </svg>
        </button>
    </div>
   </div>
   <div
     class="lg:flex flex-grow items-center bg-white lg:bg-transparent lg:shadow-none hidden"
     id="example-collapse-navbar"
   >
   <ul class=" absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 lg:mx-auto lg:flex lg:items-center lg:w-auto lg:space-x-6">
    <li><a class="text-sm text-gray-400 hover:font-bold hover:text-red-600" href="#hero">Home</a></li>
    <li class="text-gray-300">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
        </svg>
    </li>
    <li><a class="text-sm text-gray-400 hover:font-bold hover:text-red-600" href="#about">About</a></li>
    <li class="text-gray-300">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
        </svg>
    </li>
    <li><a class="text-sm text-gray-400 hover:font-bold hover:text-red-600" href="#services">Services</a></li>
    <li class="text-gray-300">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
        </svg>
    </li>
    <li><a class="text-sm text-gray-400 hover:font-bold hover:text-red-600" href="#coachs">Our coachs</a></li>
    <li class="text-gray-300">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
        </svg>
    </li>
    <li><a class="text-sm text-gray-400 hover:font-bold hover:text-red-600" href="#contact">Contact</a></li>
</ul>
   <ul class="flex flex-col lg:flex-row list-none lg:ml-auto">
       <!-- Dashboard -->
       <li class="flex items-center">
           @if (Route::has('login'))
           @auth
        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-400 hover:font-bold hover:text-red-600 cursor-pointer">Dashboard</a>
       </li>
       <!-- Login -->
       <li class="flex items-center">
           @else
            <a href="{{ route('login') }}" class="text-sm text-gray-400 hover:font-bold hover:text-red-600 cursor-pointer">Log in</a>
       </li>

        @endauth
        @endif
    </ul>
   </div>
 </div>
</nav>



<div class="navbar-menu relative z-50 hidden">
    <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
    <nav class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 bg-white border-r overflow-y-auto">
        <div class="flex items-center mb-8">
            <a class="mr-auto text-3xl font-bold leading-none" href="#">
                <svg class="h-12" alt="logo" viewBox="0 0 10240 10240">
                    <path xmlns="http://www.w3.org/2000/svg" d="M8284 9162 c-2 -207 -55 -427 -161 -667 -147 -333 -404 -644 -733 -886 -81 -59 -247 -169 -256 -169 -3 0 -18 -9 -34 -20 -26 -19 -344 -180 -354 -180 -3 0 -29 -11 -58 -24 -227 -101 -642 -225 -973 -290 -125 -25 -397 -70 -480 -80 -22 -3 -76 -9 -120 -15 -100 -13 -142 -17 -357 -36 -29 -2 -98 -7 -153 -10 -267 -15 -436 -28 -525 -40 -14 -2 -45 -7 -70 -10 -59 -8 -99 -14 -130 -20 -14 -3 -41 -7 -60 -11 -19 -3 -39 -7 -45 -8 -5 -2 -28 -6 -50 -10 -234 -45 -617 -165 -822 -257 -23 -10 -45 -19 -48 -19 -7 0 -284 -138 -340 -170 -631 -355 -1107 -842 -1402 -1432 -159 -320 -251 -633 -308 -1056 -26 -190 -27 -635 -1 -832 3 -19 7 -59 10 -89 4 -30 11 -84 17 -120 6 -36 12 -77 14 -91 7 -43 33 -174 39 -190 3 -8 7 -28 9 -45 6 -35 52 -221 72 -285 7 -25 23 -79 35 -120 29 -99 118 -283 189 -389 67 -103 203 -244 286 -298 75 -49 178 -103 196 -103 16 0 27 16 77 110 124 231 304 529 485 800 82 124 153 227 157 230 3 3 28 36 54 74 116 167 384 497 546 671 148 160 448 450 560 542 14 12 54 45 90 75 88 73 219 172 313 238 42 29 77 57 77 62 0 5 -13 34 -29 66 -69 137 -149 405 -181 602 -7 41 -14 82 -15 90 -1 8 -6 46 -10 83 -3 37 -8 77 -10 88 -2 11 -7 65 -11 122 -3 56 -8 104 -9 107 -2 3 0 12 5 19 6 10 10 8 15 -10 10 -34 167 -346 228 -454 118 -210 319 -515 340 -515 4 0 40 18 80 40 230 128 521 255 787 343 118 40 336 102 395 113 28 5 53 11 105 23 25 5 59 12 75 15 17 3 41 8 55 11 34 7 274 43 335 50 152 18 372 29 565 29 194 0 481 -11 489 -19 2 -3 -3 -6 -12 -6 -9 -1 -20 -2 -24 -3 -33 -8 -73 -16 -98 -21 -61 -10 -264 -56 -390 -90 -649 -170 -1243 -437 -1770 -794 -60 -41 -121 -82 -134 -93 l-24 -18 124 -59 c109 -52 282 -116 404 -149 92 -26 192 -51 220 -55 17 -3 64 -12 105 -21 71 -14 151 -28 230 -41 19 -3 46 -7 60 -10 14 -2 45 -7 70 -10 25 -4 56 -8 70 -10 14 -2 53 -7 88 -10 35 -4 71 -8 81 -10 10 -2 51 -6 92 -9 101 -9 141 -14 147 -21 3 -3 -15 -5 -39 -6 -24 0 -52 -2 -62 -4 -21 -4 -139 -12 -307 -22 -242 -14 -700 -7 -880 13 -41 4 -187 27 -250 39 -125 23 -274 68 -373 111 -43 19 -81 34 -86 34 -4 0 -16 -8 -27 -17 -10 -10 -37 -33 -59 -52 -166 -141 -422 -395 -592 -586 -228 -257 -536 -672 -688 -925 -21 -36 -43 -66 -47 -68 -4 -2 -8 -7 -8 -11 0 -5 -24 -48 -54 -97 -156 -261 -493 -915 -480 -935 2 -3 47 -21 101 -38 54 -18 107 -36 118 -41 58 -25 458 -138 640 -181 118 -27 126 -29 155 -35 14 -2 45 -9 70 -14 66 -15 137 -28 300 -55 37 -7 248 -33 305 -39 28 -3 84 -9 125 -13 163 -16 792 -8 913 12 12 2 58 9 102 15 248 35 423 76 665 157 58 19 134 46 170 60 86 33 344 156 348 166 2 4 8 7 13 7 14 0 205 116 303 184 180 126 287 216 466 396 282 281 511 593 775 1055 43 75 178 347 225 455 100 227 236 602 286 790 59 220 95 364 120 485 6 28 45 245 50 275 2 14 7 41 10 60 3 19 8 49 10 65 2 17 6 46 9 65 15 100 35 262 40 335 3 39 8 89 10 112 22 225 33 803 21 1043 -3 41 -7 129 -11 195 -3 66 -8 136 -10 155 -2 19 -6 76 -10 125 -3 50 -8 101 -10 115 -2 14 -6 57 -10 95 -7 72 -12 113 -20 175 -2 19 -7 55 -10 80 -6 46 -43 295 -51 340 -2 14 -9 54 -15 90 -5 36 -16 97 -24 135 -8 39 -17 84 -20 100 -12 68 -18 97 -50 248 -19 87 -47 204 -61 260 -14 56 -27 109 -29 117 -30 147 -232 810 -253 832 -4 4 -7 -23 -8 -60z"></path>
                </svg>
            </a>
            <button class="navbar-close">
                <svg class="h-6 w-6 text-gray-400 cursor-pointer hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
        <div>
            <ul>
                <li class="mb-1">
                    <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="hero">Home</a>
                </li>
                <li class="mb-1">
                    <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="about">About Us</a>
                </li>
                <li class="mb-1">
                    <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="services">Services</a>
                </li>
                <li class="mb-1">
                    <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="coachs">coachs</a>
                </li>
                <li class="mb-1">
                    <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="contact">Contact</a>
                </li>
            </ul>
        </div>
        <div class="mt-auto">
            <div class="pt-6">
                <a class="block px-4 py-3 mb-3 text-xs text-center font-semibold leading-none bg-gray-50 hover:bg-gray-100 rounded-xl" href="{{ route('login') }}">Sign in</a>
            </div>
            <p class="my-4 text-xs text-center text-gray-400">
                <span>Copyright © 2021</span>
            </p>
        </div>
    </nav>
</div>
<!-- Main Area -->
<main>
 <!-- Hero -->
 <div
   id="hero" class="relative pt-16 pb-32 flex content-center items-center justify-center"
   style="min-height: 95vh"
 >
   <div class="absolute top-0 w-full h-full bg-top bg-cover" style="
       background-image: url('https://mattsko.files.wordpress.com/2021/07/0-muscle-3837833.jpg?w=634');">
     <span id="blackOverlay"class="w-full h-full absolute opacity-75 bg-black"></span>
   </div>
   <div class="container relative mx-auto" data-aos="zoom-in-down">>
     <div class="items-center flex flex-wrap">
       <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center">
         <div>
           <h1 class="text-white font-semibold text-5xl" >
             Feel The <span class="text-red-500">Power</span>
           </h1>
           <p class="mt-4 text-lg text-gray-300">
             Welcome to Master GYM. We are a fitness and training
             center that focuses on pushing you to your absolute limit.
             Download our complete brochure to get started today!
           </p>
         </div>
       </div>
     </div>
   </div>
   <div
     class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden"
     style="height: 70px; transform: translateZ(0px)"
   >
     <svg
       class="absolute bottom-0 overflow-hidden"
       xmlns="http://www.w3.org/2000/svg"
       preserveAspectRatio="none"
       version="1.1"
       viewBox="0 0 2560 100"
       x="0"
       y="0"
     >
       <polygon points="2560 0 2560 100 0 100"></polygon>
     </svg>
   </div>
 </div>

 <!-- About Section -->
 <section id="about" class="relative py-20 bg-black text-white">
   <div class="container mx-auto px-4">
     <div class="items-center flex flex-wrap">
       <div
         class="w-full md:w-4/12 ml-auto mr-auto px-4"
         data-aos="fade-right"
       >
         <img
           alt="..."
           class="max-w-full rounded-lg shadow-lg"
           src="https://images.unsplash.com/photo-1612099197070-4db4ab9abcd4?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=327&q=80"
         />
       </div>
       <div
         class="w-full md:w-5/12 ml-auto mr-auto px-4"
         data-aos="fade-left"
       >
         <div class="md:pr-12">
           <small class="text-red-500 text-lg">About our gym</small>
           <h3 class="text-4xl uppercase font-bold">Safe Body Building</h3>
           <p class="mt-4 text-lg leading-relaxed">
             The extension comes with three pre-built pages to help you get
             started faster. You can change the text and images and you're
             good to go.
           </p>
           <ul class="list-none mt-6">
             <li class="py-2">
               <div class="flex items-center">
                 <div>
                   <span
                     class="font-semibold inline-block py-3 mr-3 text-white"
                     ><i class="fas fa-dumbbell fa-2x"></i
                   ></span>
                 </div>
                 <div>
                   <h4 class="text-xl">
                     The latest & greatest gym equipment
                   </h4>
                 </div>
               </div>
             </li>
             <li class="py-2">
               <div class="flex items-center">
                 <div>
                   <span
                     class="font-semibold inline-block py-3 mr-3 text-white"
                     ><i class="fas fa-hard-hat fa-2x"></i
                   ></span>
                 </div>
                 <div>
                   <h4 class="text-xl">
                     5-inch, quality foam floor padding
                   </h4>
                 </div>
               </div>
             </li>
             <li class="py-2">
               <div class="flex items-center">
                 <div>
                   <span
                     class="font-semibold inline-block py-3 mr-3 text-white"
                     ><i class="fas fa-users fa-2x"></i
                   ></span>
                 </div>
                 <div>
                   <h4 class="text-xl">Professional trainers</h4>
                 </div>
               </div>
             </li>
           </ul>
         </div>
       </div>
     </div>
   </div>
 </section>

 <!-- ChoseUs Section Begin -->
<section id="services" class="choseus-section py-16">
    <div class="container mx-auto">
        <div class="mb-12 text-center">
            <span class="text-gray-600 text-lg font-medium">Why chose us?</span>
            <h2 class="text-3xl font-bold mt-2">PUSH YOUR LIMITS FORWARD</h2>
        </div>
        <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-4">
            <div class="text-center " data-aos="fade-up">
                <span class="block mb-4 text-5xl text-red-500">
                    <i class="fa-sharp fa-solid fa-medal"></i>
                </span>
                <h4 class="text-lg font-medium mb-2">Modern equipment</h4>
                <p class="text-gray-500 text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut dolore facilisis.</p>
            </div>
            <div class="text-center" data-aos="fade-down">
                <span class="block mb-4 text-5xl text-red-500">
                    <i class="fa-solid fa-bowl-food"></i>
                </span>
                <h4 class="text-lg font-medium mb-2">Healthy nutrition plan</h4>
                <p class="text-gray-500 text-sm">Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
            </div>
            <div class="text-center" data-aos="fade-up">
                <span class="block mb-4 text-5xl text-red-500">
                    <i class="fa-solid fa-dumbbell"></i>
                </span>
                <h4 class="text-lg font-medium mb-2">Professional training plan</h4>
                <p class="text-gray-500 text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut dolore facilisis.</p>
            </div>
            <div class="text-center" data-aos="fade-down">
                <span class="block mb-4 text-5xl text-red-500">
                    <i class="fa-solid fa-heart-pulse"></i>
                </span>
                <h4 class="text-lg font-medium mb-2">Unique to your needs</h4>
                <p class="text-gray-500 text-sm">Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
            </div>
        </div>
    </div>
</section>


 <!-- Trainers Section -->
 <section id="coachs" class="pt-20 pb-48">
   <div class="container mx-auto px-4">
     <div class="flex flex-wrap justify-center text-center mb-24">
       <div class="w-full lg:w-6/12 px-4">
         <h2 class="text-4xl font-semibold uppercase">
           Meet Our Trainers
         </h2>
         <p class="text-lg leading-relaxed m-4">
           Our trainers are are here to dedicate the time and effort that
           you need to get in the best shape of your life
         </p>
       </div>
     </div>
     <!-- Trainer Card Wrapper -->
     <div class="flex flex-wrap">
       <!-- Card 1 -->
       <div
         class="w-full md:w-4/12 lg:mb-0 mb-12 px-4"
         data-aos="flip-right"
       >
         <div class="px-6">
           <img
             alt="..."
             src="https://images.unsplash.com/photo-1597347343908-2937e7dcc560?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80"
             class="shadow-lg rounded max-w-full mx-auto"
             style="max-width: 250px"
           />
           <div class="pt-6 text-center">
             <h5 class="text-xl font-bold">Mr Rogers</h5>
             <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
               Neighborhood Watchman
             </p>
           </div>
         </div>
       </div>
       <!-- Card 2 -->
       <div
         class="w-full md:w-4/12 lg:mb-0 mb-12 px-4"
         data-aos="flip-right"
       >
         <div class="px-6">
           <img
             alt="..."
             src="https://images.unsplash.com/photo-1606902965551-dce093cda6e7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80"
             class="shadow-lg rounded max-w-full mx-auto"
             style="max-width: 250px"
           />
           <div class="pt-6 text-center">
             <h5 class="text-xl font-bold">Strawberry Shortcake</h5>
             <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
               Cupcake Smasher
             </p>
           </div>
         </div>
       </div>
       <!-- Card 3 -->
       <div
         class="w-full md:w-4/12 lg:mb-0 mb-12 px-4"
         data-aos="flip-right"
       >
         <div class="px-6">
           <img
             alt="..."
             src="https://images.unsplash.com/photo-1567013127542-490d757e51fc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80"
             class="shadow-lg rounded max-w-full mx-auto"
             style="max-width: 250px"
           />
           <div class="pt-6 text-center">
             <h5 class="text-xl font-bold">Ronald McDonald</h5>
             <p class="mt-1 text-sm text-gray-500 uppercase font-semibold">
               Double Whoopass With Cheese
             </p>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>

 <!-- Contact Header Section -->
 <section id="contact" class="pb-20 relative block bg-black text-white">
   <div
     class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
     style="height: 80px; transform: translateZ(0px)"
   >
     <svg
       class="absolute bottom-0 overflow-hidden"
       xmlns="http://www.w3.org/2000/svg"
       preserveAspectRatio="none"
       version="1.1"
       viewBox="0 0 2560 100"
       x="0"
       y="0"
     >
       <polygon points="2560 0 2560 100 0 100"></polygon>
     </svg>
   </div>
   <div class="container mx-auto px-4 lg:pt-24 lg:pb-64 pb-20 pt-20">
     <div class="flex flex-wrap text-center justify-center">
       <div class="w-full lg:w-6/12 px-4">
         <h2 class="text-4xl font-semibold text-white uppercase">
           Contact Us
         </h2>
         <p class="text-lg leading-relaxed mt-4 mb-4">
           Contact us to ask any questions, aquire a membership, talk to
           our trainers or anything else
         </p>
       </div>
     </div>
   </div>
 </section>

 <!-- Contact Form -->
 <section class="relative block py-24 lg:pt-0 bg-black">
   <div class="container mx-auto px-4">
     <div class="flex flex-wrap justify-center lg:-mt-64 -mt-48">
       <div class="w-full lg:w-6/12 px-4">
         <div
           class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-gray-300"
           data-aos="fade-up-right"
         >
         <form action="{{route('send.message')}}" method="¨POST">
            @csrf
           <div class="flex-auto p-5 lg:p-10 bg-red-500 text-white">
             <h4 class="text-2xl font-semibold">Want to work with us?</h4>
             <p class="leading-relaxed mt-1 mb-4">
               Complete this form and we will get back to you in 24 hours.
             </p>
             <div class="relative w-full mb-3 mt-8">
               <label
                 class="block uppercase text-xs font-bold mb-2"
                 for="full-name"
                 >Full Name</label
               ><input
                 type="text"
                 class="px-3 py-3 placeholder-gray-400 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full"
                 placeholder="Full Name"
                 style="transition: all 0.15s ease 0s"
                 name="name"
               />
             </div>
             <div class="relative w-full mb-3">
               <label
                 class="block uppercase text-xs font-bold mb-2"
                 for="email"
                 >Email</label
               ><input
                 type="email"
                 class="px-3 py-3 placeholder-gray-400 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full"
                 placeholder="Email"
                 style="transition: all 0.15s ease 0s"
                 name="email"
               />
             </div>
             <div class="relative w-full mb-3">
               <label
                 class="block uppercase text-xs font-bold mb-2"
                 for="message"
                 >Message</label
               ><textarea
                 rows="4"
                 cols="80"
                 class="px-3 py-3 placeholder-gray-400 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full"
                 placeholder="Type a message..."
                 name="message"
               ></textarea>
             </div>
             <div class="text-center mt-6">
               <button
                 class="bg-gray-900 text-white active:bg-gray-700 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1"
                 type="submit"
                 style="transition: all 0.15s ease 0s"
               >
                 Send Message
               </button>
             </div>
           </div>
        </form>
         </div>
       </div>
     </div>
   </div>
 </section>
</main>

<!-- Footer -->
<footer class="relative bg-gray-300 pt-8 pb-6">
 <div
   class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
   style="height: 80px; transform: translateZ(0px)"
 >
   <svg
     class="absolute bottom-0 overflow-hidden"
     xmlns="http://www.w3.org/2000/svg"
     preserveAspectRatio="none"
     version="1.1"
     viewBox="0 0 2560 100"
     x="0"
     y="0"
   >
     <polygon
       class="text-gray-300 fill-current"
       points="2560 0 2560 100 0 100"
     ></polygon>
   </svg>
 </div>
 <div class="container mx-auto px-4">
   <div class="flex flex-wrap">
     <div class="w-full lg:w-6/12 px-4">
       <h4 class="text-3xl font-semibold">Follow us on social media</h4>
       <div class="mt-6">
         <button
           class="bg-white text-blue-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3"
           type="button"
         >
           <i class="flex fab fa-twitter text-red-500"></i></button
         ><button
           class="bg-white text-blue-600 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3"
           type="button"
         >
           <i
             class="flex fab fa-facebook-square text-red-500"
           ></i></button
         ><button
           class="bg-white text-pink-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3"
           type="button"
         >
           <i class="flex fab fa-linkedin text-red-500"></i>
         </button>
       </div>
     </div>
   </div>
   <hr class="my-6 border-gray-400" />
   <div
     class="flex flex-wrap items-center md:justify-between justify-center"
   >
     <div class="w-full px-4 mx-auto text-center">
       <div class="text-sm text-gray-600 font-semibold py-1">
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Made with <i class="fa fa-heart" aria-hidden="true"></i> by Chkir
       </div>
     </div>
   </div>
 </div>
</footer>

    </body>
        <!-- AOS Script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"
    integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw=="
    crossorigin="anonymous"></script>
        <!-- AOS Script -->
<script src="./assets/js/index.js"></script>
</html>
