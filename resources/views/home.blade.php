<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <title>Cheaply</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-straight/css/uicons-regular-straight.css'>
    </head>

    <body class="bg-white">
        {{-- Navbar --}}
        <nav id="navbar" class="flex flex-wrap py-0 px-10 items-center justify-between w-full h-32 font-barlow bg-black-252525 mt-0 z-10 top-0 rounded-b-[48px]">
            <div class="flex">
                <a href="#" class="flex items-center text-green-d5ff40 no-underline">
                    <span class="self-center whitespace-nowrap text-4xl font-bold transition-colors duration-300 transform hover:text-white uppercase">fusionbody</span>
                </a>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" id="menu-button" class="h-6 w-6 cursor-pointer md:hidden block text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" >
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <div id="menu" class="hidden w-full md:flex md:items-center md:w-auto">
                <ul class="pt-4 text-base text-white md:flex md:justify-between md:pt-0 font-barlow">
                    <li>
                        <a href="#home" class="p-4 py-2 block no-underline transition-colors duration-300 transform hover:text-gray-200 hover:text-underline">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="#about" class="p-4 py-2 block no-underline transition-colors duration-300 transform hover:text-gray-200 hover:text-underline">
                            About us
                        </a>
                    </li>
                    <li>
                        <a href="#feature" class="p-4 py-2 block no-underline transition-colors duration-300 transform hover:text-gray-200 hover:text-underline">
                            Features
                        </a>
                    </li>
                    <li>
                        <a href="#contact" class="p-4 py-2 block no-underline transition-colors duration-300 transform hover:text-gray-200 hover:text-underline">
                            Contact
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        {{-- Home --}}
        <header id="home" class="overflow-hidden h-auto">
            <div class="container mx-auto py-0 mt-10 flex justify-center">
                <div class="w-full h-auto bg-black-252525 rounded-[56px]">
                    <img src={{ asset ('img/Ornament73.png') }} alt="ornament1" class="rounded-t-[56px]">
                    <div class="flex justify-between items-center pt-10">   
                        <div class="flex pl-10">
                            <p class="font-barlow text-4xl font-medium capitalize text-white">transform your body</p>
                        </div>   
                        <div class="flex pr-10">
                            <img src={{ asset ('img/Ornament60.png') }} alt="ornament2" class="p-2 w-40 h-20">
                            <img src={{ asset ('img/Ornament60.png') }} alt="ornament2" class="p-2 w-40 h-20">
                        </div>                  
                    </div>
                    <div class="flex justify-between items-end pt-10 font-barlow">   
                        <div class="flex pl-10">
                            <p class="text-4xl font-medium capitalize text-white">with</p>
                        </div>   
                        <div class="flex">
                            <p class="lg:text-9xl text-3xl font-bold uppercase text-green-d5ff40">fusionbody</p>
                        </div>    
                        <div class="flex pr-10">
                            <p class="text-4xl font-medium capitalize text-white">gym</p>
                        </div>               
                    </div>
                    <div class="flex justify-between items-center pt-10 pb-10 w-full">   
                        <div class="flex pl-10">
                            <img src={{ asset ('img/1.png') }} alt="pict1" class="p-2 h-full w-full object-cover rounded-xl">
                        </div>    
                        <div class="grid grid-rows-2 pr-10 w-1/2 p-10">
                            <p class="text-base font-opensans font-light capitalize text-white break-words">A training center that blends cutting-edge technology, top-notch facilities, and experienced trainers to help you reach your maximum potential</p>
                            <a href="#" class="font-barlow inline-flex items-center justify-center rounded-full h-12 w-48 px-5 py-2 font-bold text-lg tracking-wide text-black-252525 bg-green-d5ff40 transform duration-200 hover:opacity-50">
                                Get Started <img src={{ asset ('img/arrow.png') }} class="pl-2 w-10">
                            </a>
                        </div>               
                    </div>
                </div>
            </div>
        </header>

        {{-- About --}}
        <section id="about" class="overflow-hidden h-auto">
            <div class="flex gap-16 mt-10">
                <img alt="" src={{ asset ('img/nike.png') }} class="relative block h-full w-full object-cover"/>
                <img alt="" src={{ asset ('img/puma.png') }} class="relative block h-full w-full object-cover"/>
                <img alt="" src={{ asset ('img/under.png') }} class="relative block h-full w-full object-cover"/>
                <img alt="" src={{ asset ('img/nb.png') }} class="relative block h-full w-full object-cover"/>
                <img alt="" src={{ asset ('img/adidas.png') }} class="relative block h-full w-full object-cover"/>
                <img alt="" src={{ asset ('img/reebok.png') }} class="relative block h-full w-full object-cover"/>
            </div>
            <div class="container mx-auto py-0 mt-10 items-center">
                <h2 class="text-6xl font-bold text-center font-barlow uppercase tracking-wide text-black-252525">
                    why choose us
                </h2>
                <p class="text-2xl font-normal text-black-494949 text-center normal-case font-barlow pt-4">
                    <span class="uppercase">FUSIONBODY</span> gym is where cutting-edge technology and unparalleled training experience collide to help you reach your fitness goals.
                </p>
                <div class="flex flex-wrap mt-2">
                    <div class="font-opensans w-1/2 p-2 rounded-xl">
                        <div class="p-4">
                            <img alt="" src={{ asset ('img/1.png') }} class="relative block h-full w-full object-cover"/>
                            <div class="relative flex items-center justify-center p-4 -mt-20">
                                <a href="#" class="rounded-full w-full px-5 py-2 font-bold text-lg text-center tracking-wide text-black-252525 bg-white transform duration-200 hover:bg-green-d5ff40">
                                    CUTTING-EDGE TECHNOLOGY
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="font-opensans w-1/2 p-2 rounded-xl">
                        <div class="p-4">
                            <img alt="" src={{ asset ('img/1.png') }} class="relative block h-full w-full object-cover"/>
                            <div class="relative flex items-center justify-center p-4 -mt-20">
                                <a href="#" class="rounded-full w-full px-5 py-2 font-bold text-lg text-center tracking-wide text-black-252525 bg-white transform duration-200 hover:bg-green-d5ff40">
                                    EXPERIENCED TRAINERS
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="font-opensans w-1/2 p-2 rounded-xl">
                        <div class="p-4">
                            <img alt="" src={{ asset ('img/1.png') }} class="relative block h-full w-full object-cover"/>
                            <div class="relative flex items-center justify-center p-4 -mt-20">
                                <a href="#" class="rounded-full w-full px-5 py-2 font-bold text-lg text-center tracking-wide text-black-252525 bg-white transform duration-200 hover:bg-green-d5ff40">
                                    CUSTOMIZABLE WORKOUTS
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="font-opensans w-1/2 p-2 rounded-xl">
                        <div class="p-4">
                            <img alt="" src={{ asset ('img/1.png') }} class="relative block h-full w-full object-cover"/>
                            <div class="relative flex items-center justify-center p-4 -mt-20">
                                <a href="#" class="rounded-full w-full px-5 py-2 font-bold text-lg text-center tracking-wide text-black-252525 bg-white transform duration-200 hover:bg-green-d5ff40">
                                    MOTIVATING COMMUNITY
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Package --}}
        <section id="package" class="overflow-hidden h-auto">
            <div class="container mx-auto py-0 mt-10 flex justify-center">
                <div class="w-full h-auto bg-black-252525 rounded-[56px]">
                    <h1 class="lg:text-8xl text-3xl font-bold uppercase text-white text-center font-barlow pt-10">GYM PACKAGE PRICE</h1>
                    <div class="grid grid-cols-2 gap-8 items-start pt-5">   
                        <div class="justify-center pl-10">
                            {{-- Basic Plan --}}
                            <div class="pb-7">
                                <h1 class="text-xl font-plusjakartasans font-normal uppercase text-white">BASIC PLAN</h1>
                                <p class="text-lg font-plusjakartasans font-normal text-white pt-1">
                                    <span class="uppercase text-3xl text-green-d5ff40">$49</span> /month
                                </p>
                                <ul class="font-opensans text-white p-1">
                                    <li class="pt-2 flex items-center">
                                        <img alt="" src={{ asset ('img/checklist.png') }} class="w-3 h-3"> <p class="p-2"> Get access to gym facilities</p>
                                    </li>
                                    <li class="pt-2 flex items-center">
                                        <img alt="" src={{ asset ('img/checklist.png') }} class="w-3 h-3"> <p class="p-2"> Unlimited group fitness classes</p>
                                    </li>
                                    <li class="pt-2 flex items-center">
                                        <img alt="" src={{ asset ('img/checklist.png') }} class="w-3 h-3"> <p class="p-2"> Access to online workout resources</p>
                                    </li>
                                </ul>
                                <a href="#" class="inline-flex font-plusjakartasans items-center justify-center rounded-full w-44 px-5 py-2 font-medium text-lg tracking-wide text-black-252525 bg-green-d5ff40 transform duration-200 hover:opacity-50">
                                    Getting Started
                                </a>
                                <hr class="mt-10 border border-white-fafafa bg-white-fafafa">
                            </div>
                            {{-- Premium Plan --}}
                            <div class="pb-7">
                                <h1 class="text-xl font-plusjakartasans font-normal uppercase text-white">PREMIUM PLAN</h1>
                                <p class="text-lg font-plusjakartasans font-normal text-white pt-1">
                                    <span class="uppercase text-3xl text-green-d5ff40">$99</span> /month
                                </p>
                                <ul class="font-opensans text-white p-1">
                                    <li class="pt-2 flex items-center">
                                        <img alt="" src={{ asset ('img/checklist.png') }} class="w-3 h-3"> <p class="p-2">Basic Package</p>
                                    </li>
                                    <li class="pt-2 flex items-center">
                                        <img alt="" src={{ asset ('img/checklist.png') }} class="w-3 h-3"> <p class="p-2">Personal training sessions</p>
                                    </li>
                                    <li class="pt-2 flex items-center">
                                        <img alt="" src={{ asset ('img/checklist.png') }} class="w-3 h-3"> <p class="p-2">Nutritional counseling</p>
                                    </li>
                                    <li class="pt-2 flex items-center">
                                        <img alt="" src={{ asset ('img/checklist.png') }} class="w-3 h-3"> <p class="p-2">Access to the sauna and steam room</p>
                                    </li>
                                </ul>
                                <a href="#" class="inline-flex font-plusjakartasans items-center justify-center rounded-full w-44 px-5 py-2 font-medium text-lg tracking-wide text-black-252525 bg-green-d5ff40 transform duration-200 hover:opacity-50">
                                    Getting Started
                                </a>
                                <hr class="mt-10 border border-white-fafafa bg-white-fafafa">
                            </div>
                            {{-- Ultimate Plan --}}
                            <div class="pb-7">
                                <h1 class="text-xl font-plusjakartasans font-normal uppercase text-white">ULTIMATE PLAN</h1>
                                <p class="text-lg font-plusjakartasans font-normal text-white pt-1">
                                    <span class="uppercase text-3xl text-green-d5ff40">$149</span> /month
                                </p>
                                <ul class="font-opensans text-white p-1">
                                    <li class="pt-2 flex items-center">
                                        <img alt="" src={{ asset ('img/checklist.png') }} class="w-3 h-3"> <p class="p-2">Premium Package</p>
                                    </li>
                                    <li class="pt-2 flex items-center">
                                        <img alt="" src={{ asset ('img/checklist.png') }} class="w-3 h-3"> <p class="p-2">Exclusive access to the VIP lounge</p>
                                    </li>
                                    <li class="pt-2 flex items-center">
                                        <img alt="" src={{ asset ('img/checklist.png') }} class="w-3 h-3"> <p class="p-2">Private bathroom</p>
                                    </li>
                                    <li class="pt-2 flex items-center">
                                        <img alt="" src={{ asset ('img/checklist.png') }} class="w-3 h-3"> <p class="p-2">24/7 access to the gym</p>
                                    </li>
                                </ul>
                                <a href="#" class="inline-flex font-plusjakartasans items-center justify-center rounded-full w-44 px-5 py-2 font-medium text-lg tracking-wide text-black-252525 bg-green-d5ff40 transform duration-200 hover:opacity-50">
                                    Getting Started
                                </a>
                            </div>
                        </div>   
                        <div class="pr-10">
                            <div class="flex justify-center">
                                <img src={{ asset ('img/Ornament60.png') }} alt="ornament2" class="p-2 w-36 h-20">
                                <img src={{ asset ('img/Ornament60.png') }} alt="ornament2" class="p-2 w-36 h-20">
                                <img src={{ asset ('img/Ornament60.png') }} alt="ornament2" class="p-2 w-36 h-20">
                                <img src={{ asset ('img/Ornament60.png') }} alt="ornament2" class="p-2 w-36 h-20">
                            </div>   
                            <p class="text-lg font-plusjakartasans font-normal text-white pt-1">
                                Get started now and achieve your fitness goals with FUSIONBODY! Join now and get a special discount of <span class="text-green-d5ff40"> 10% </span> on the first month of your membership."
                            </p>
                            <div class="font-opensans rounded-xl">
                                <img alt="" src={{ asset ('img/3.png') }} class="relative block h-full w-full object-cover rounded-xl"/>
                                <div class="relative flex items-center justify-center p-4 -mt-24">
                                    <a href="#" class="inline-flex items-center justify-center rounded-full border-black-252525 border-2 w-full px-5 py-2 font-bold text-2xl text-center tracking-wide text-black-252525  hover:bg-white transform duration-200 bg-green-d5ff40">
                                        TRANSFORM YOUR BODY 
                                        <div class="pl-20">
                                            <img src={{ asset ('img/arrow.png') }} class="w-10">
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>            
                    </div>
                </div>
            </div>
        </section>

        {{-- Testimoni --}}
        <section id="testimoni" class="overflow-hidden h-auto">
            <div class="container mx-auto py-0 mt-10">
                <h2 class="text-6xl font-bold text-center font-barlow uppercase tracking-wide text-black-252525 pb-10">
                    what they say
                </h2>
                <div class="pb-5 w-full h-auto bg-black-252525 rounded-[56px]">
                    <div class="grid grid-cols-2 gap-8 items-center pt-5">   
                        <div class="justify-center pl-10">
                            <img src={{ asset ('img/4.png') }} alt="" class="p-2 h-2/3 w-2/3 object-cover rounded-xl">                                   
                        </div>
                        <div class="pr-10 items-center">
                            <p class="text-right text-white font-opensans font-medium text-lg p-10"><span class="text-3xl text-green-d5ff40">1</span>/5</p>
                            <p class="text-white font-opensans font-base text-xl p-10">
                                FUSIONBODY gym has exceeded all of my expectations. The knowledgeable trainers and innovative workouts have helped me reach my fitness goals in record time. I'm grateful to be a part of this supportive community.
                            </p>
                            <div class="flex gap-8 justify-center items-center">
                                <img src={{ asset ('img/Vector.png') }} alt="" class="p-2 w-12 h-12">
                                <img src={{ asset ('img/vector2.png') }} alt="" class="p-2 w-14 h-14">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Footer --}}
        <footer id="footer" class="overflow-hidden h-auto bg-black-252525 rounded-t-[48px] mt-10">
            <div class="container mx-auto px-5 mt-10">
                <p class="text-xl font-bold font-barlow uppercase tracking-wide text-white font-opensans">
                    Join the Fitness Revolution with
                </p>
                <div class="flex items-center">
                    <h2 class="text-9xl font-extrabold font-barlow uppercase tracking-wide text-green-d5ff40 font-opensans">
                        FUSIONBODY
                    </h2>                    
                    <img src={{ asset ('img/arrowe.png') }} class="w-28">
                </div>
                <div class="w-full h-auto bg-black-252525 rounded-[56px] font-opensans font-normal">
                    <div class="grid grid-cols-2 gap-8 items-start pt-5">   
                        <div class="font-opensans w-full p-2 rounded-xl">
                            <ul class="flex gap-3 text-white">
                                <li>
                                    <a href="#about" class="p-4 py-2 uppercase block no-underline transition-colors duration-300 transform hover:text-gray-200 hover:text-underline">
                                        about us
                                    </a>
                                </li>
                                <li>
                                    <a href="#service" class="p-4 py-2 uppercase block no-underline transition-colors duration-300 transform hover:text-gray-200 hover:text-underline">
                                        services
                                    </a>
                                </li>
                                <li>
                                    <a href="#service" class="p-4 py-2 uppercase block no-underline transition-colors duration-300 transform hover:text-gray-200 hover:text-underline">
                                        our teams
                                    </a>
                                </li>
                                <li>
                                    <a href="#service" class="p-4 py-2 uppercase block no-underline transition-colors duration-300 transform hover:text-gray-200 hover:text-underline">
                                        contact
                                    </a>
                                </li>
                            </ul>
                        </div>                        
                        <div class="font-opensans w-full p-2 rounded-xl">
                            <ul class="flex justify-end gap-3 text-white">
                                <li>
                                    <a href="#pp" class="p-4 py-2 block no-underline transition-colors duration-300 transform hover:text-gray-200 hover:text-underline">
                                        Privacy Policy
                                    </a>
                                </li>
                                <li class="p-4 py-2 block">
                                    |
                                </li>
                                <li>
                                    <a href="#tnc" class="p-4 py-2 block no-underline transition-colors duration-300 transform hover:text-gray-200 hover:text-underline">
                                        Term & Conditions
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </body>

</html>
