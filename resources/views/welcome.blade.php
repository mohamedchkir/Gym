<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="https://www.flaticon.com/svg/static/icons/svg/2913/2913448.svg" type="image/x-icon"/>
        <title>GYM</title>
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
     ><button
 class="cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent rounded bg-transparent block lg:hidden outline-none focus:outline-none"
       type="button"
       onclick="toggleNavbar('example-collapse-navbar')"
     >
       <i class="text-white fas fa-bars"></i>
     </button>
   </div>
   <div
     class="lg:flex flex-grow items-center bg-white lg:bg-transparent lg:shadow-none hidden"
     id="example-collapse-navbar"
   >

   <ul class="flex flex-col lg:flex-row list-none lg:ml-auto">
       <!-- Dashboard -->
       <li class="flex items-center">
           @if (Route::has('login'))
           @auth
        <a href="{{ url('/dashboard') }}" class="bg-transparent hover:bg-red-500 text-red-500 font-semibold hover:text-white p-1 border border-red-500 hover:border-transparent rounded inline-block mt-2  cursor-pointer">Dashboard</a>
       </li>
       <!-- Login -->
       <li class="flex items-center">
           @else
            <a href="{{ route('login') }}" class="bg-transparent hover:bg-red-500 text-red-500 font-semibold hover:text-white p-1 border border-red-500 hover:border-transparent rounded inline-block mt-2  cursor-pointer">Log in</a>
       </li>
       <!-- Register -->
       <li class="flex items-center">
           @if (Route::has('register'))
            <a href="{{ route('register') }}" class="bg-transparent hover:bg-red-500 text-red-500 font-semibold hover:text-white p-1 border border-red-500 hover:border-transparent rounded inline-block mt-2 lg:mx-4 cursor-pointer">Register</a>
            @endif
        </li>

        @endauth
        @endif
    </ul>
   </div>
 </div>
</nav>
<!-- Main Area -->
<main>
 <!-- Hero -->
 <div
   class="relative pt-16 pb-32 flex content-center items-center justify-center"
   style="min-height: 95vh"
 >
   <div class="absolute top-0 w-full h-full bg-top bg-cover" style="
       background-image: url('https://mattsko.files.wordpress.com/2021/07/0-muscle-3837833.jpg?w=634');">
     <span id="blackOverlay"class="w-full h-full absolute opacity-75 bg-black"></span>
   </div>
   <div class="container relative mx-auto" data-aos="fade-in">
     <div class="items-center flex flex-wrap">
       <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center">
         <div>
           <h1 class="text-white font-semibold text-5xl">
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
<section class="choseus-section py-16">
    <div class="container mx-auto">
        <div class="mb-12 text-center">
            <span class="text-gray-600 text-lg font-medium">Why chose us?</span>
            <h2 class="text-3xl font-bold mt-2">PUSH YOUR LIMITS FORWARD</h2>
        </div>
        <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-4">
            <div class="text-center">
                <span class="block mb-4 text-5xl text-red-500">
                    <i class="fa-sharp fa-solid fa-medal"></i>
                </span>
                <h4 class="text-lg font-medium mb-2">Modern equipment</h4>
                <p class="text-gray-500 text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut dolore facilisis.</p>
            </div>
            <div class="text-center">
                <span class="block mb-4 text-5xl text-red-500">
                    <i class="fa-solid fa-bowl-food"></i>
                </span>
                <h4 class="text-lg font-medium mb-2">Healthy nutrition plan</h4>
                <p class="text-gray-500 text-sm">Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
            </div>
            <div class="text-center">
                <span class="block mb-4 text-5xl text-red-500">
                    <i class="fa-solid fa-dumbbell"></i>
                </span>
                <h4 class="text-lg font-medium mb-2">Professional training plan</h4>
                <p class="text-gray-500 text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut dolore facilisis.</p>
            </div>
            <div class="text-center">
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
 <section class="pt-20 pb-48">
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
 <section class="pb-20 relative block bg-black text-white">
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
               ></textarea>
             </div>
             <div class="text-center mt-6">
               <button
                 class="bg-gray-900 text-white active:bg-gray-700 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1"
                 type="button"
                 style="transition: all 0.15s ease 0s"
               >
                 Send Message
               </button>
             </div>
           </div>
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
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by Chkir
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
