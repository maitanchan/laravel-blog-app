<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $metaTitle ?: 'IMDB' }}</title>
    <meta name="author" content="CodeBlog">
    <meta name="description" content="{{ $metaDescription }}">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Archivo+Black&display=swap" rel="stylesheet">

    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,700&display=swap');
          .font-family-karla{
            font-family: 'Roboto', sans-serif;
          }

        @import url('https://fonts.googleapis.com/css2?family=Handjet:wght@400;500&family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,700&display=swap');

          pre{
              padding: 1px;
              background: #1a202c;
              color: white;
              border-radius: 0.5rem;
              margin-bottom: 1rem;
          }

          .header-video-container {
              position: relative;
              overflow: hidden; /* Ẩn phần nền màu đen vượt ra ngoài video */
            }

            .header-video-container::before {
              content: "";
              position: absolute;
              top: 0;
              left: 0;
              width: 100%;
              height: 100%;
              background-color: rgba(0, 0, 0, 0.466); /* Màu đen với độ mờ 20% */
              z-index: 1; /* Đặt lớp nền màu đen trên video */
            }

            video {
              position: relative;
              z-index: 0; /* Đảm bảo video hiển thị phía dưới lớp nền màu đen */
            }

            .text-white {
              color: white;
            }

            
            .title-word {
              animation: color-animation 4s linear infinite;
            }
            
            .title-word-1 {
              --color-1: #ff7124;
              --color-2: #2bbaf8;
              --color-3: #ff9795;
            }
            
            .title-word-2 {
              --color-1: #ffc64a;
              --color-2: #99fff3;
              --color-3: #237f86;
            }
            
            .title-word-3 {
              --color-1: #bef8f1;
              --color-2: #ffa1a0;
              --color-3: #bffff8;
            }
            
            .title-word-4 {
              --color-1: #3D8DAE;
              --color-2: #DF8453;
              --color-3: #E4A9A8;
            }
            
            @keyframes color-animation {
              0%    {color: var(--color-1)}
              32%   {color: var(--color-1)}
              33%   {color: var(--color-2)}
              65%   {color: var(--color-2)}
              66%   {color: var(--color-3)}
              99%   {color: var(--color-3)}
              100%  {color: var(--color-1)}
            }

            * {
              margin: 0;
              padding: 0;
            }
            
            body {
              background: #C2BEB2;
            }
            
            .center {
              position: absolute;
              top: 0;
              left: 0;
              right: 0;
              bottom: 0;
              margin: auto;
            }
            
            .table {
              width: 345px;
              height: 75px;
              background-color: #DECBA4;
              border-radius: 10px;
            }
            .table .monitor-wrapper {
              background: #3E5151;
              width: 337px;
              border-radius: 10px;
              height: 70px;
              box-shadow: 0px 2px 2px 2px rgba(0, 0, 0, 0.3);
            }
            .table .monitor-wrapper .monitor {
              width: 330px;
              height: 65px;
              border-radius: 10px;
              background-color: #34363850;
              overflow: hidden;
              white-space: nowrap;
              box-shadow: inset 0px 5px 10px 2px rgba(0, 0, 0, 0.3);
            }
            .table .monitor-wrapper .monitor p {
              font-family: "VT323", monospace;
              margin-top: 18px;
              font-size: 50px;
              position: relative;
              display: inline-block;
              animation: move 10s infinite linear;
              color: #EBB55F;
            }
            
            @keyframes move {
              from {
                left: 330px;
              }
              to {
                left: -810px;
              }
            }

          .playful span {
            position: relative;
            color: #414141;
            text-shadow: 0.25px 0.25px #DECBA4, 0.5px 0.5px #DECBA4, 0.75px 0.75px #DECBA4, 1px 1px #DECBA4, 1.25px 1.25px #DECBA4, 1.5px 1.5px #DECBA4, 1.75px 1.75px #DECBA4, 2px 2px #DECBA4, 2.25px 2.25px #DECBA4, 2.5px 2.5px #DECBA4, 2.75px 2.75px #DECBA4, 3px 3px #DECBA4, 3.25px 3.25px #DECBA4, 3.5px 3.5px #DECBA4, 3.75px 3.75px #DECBA4, 4px 4px #DECBA4, 4.25px 4.25px #DECBA4, 4.5px 4.5px #DECBA4, 4.75px 4.75px #DECBA4, 5px 5px #DECBA4, 5.25px 5.25px #DECBA4, 5.5px 5.5px #DECBA4, 5.75px 5.75px #DECBA4, 6px 6px #DECBA4;
            animation: scatter 1.75s infinite;
          }

          .playful span:nth-child(2n) {
            color: #414141;
            text-shadow: 0.25px 0.25px #DECBA4, 0.5px 0.5px #DECBA4, 0.75px 0.75px #DECBA4, 1px 1px #DECBA4, 1.25px 1.25px #DECBA4, 1.5px 1.5px #DECBA4, 1.75px 1.75px #DECBA4, 2px 2px #DECBA4, 2.25px 2.25px #DECBA4, 2.5px 2.5px #DECBA4, 2.75px 2.75px #DECBA4, 3px 3px #DECBA4, 3.25px 3.25px #DECBA4, 3.5px 3.5px #DECBA4, 3.75px 3.75px #DECBA4, 4px 4px #DECBA4, 4.25px 4.25px #DECBA4, 4.5px 4.5px #DECBA4, 4.75px 4.75px #DECBA4, 5px 5px #DECBA4, 5.25px 5.25px #DECBA4, 5.5px 5.5px #DECBA4, 5.75px 5.75px #DECBA4, 6px 6px #DECBA4;
            animation-delay: 0.3s;
          }

          .playful span:nth-child(3n) {
            color: #414141;
            text-shadow: 0.25px 0.25px #DECBA4, 0.5px 0.5px #DECBA4, 0.75px 0.75px #DECBA4, 1px 1px #DECBA4, 1.25px 1.25px #DECBA4, 1.5px 1.5px #DECBA4, 1.75px 1.75px #DECBA4, 2px 2px #DECBA4, 2.25px 2.25px #DECBA4, 2.5px 2.5px #DECBA4, 2.75px 2.75px #DECBA4, 3px 3px #DECBA4, 3.25px 3.25px #DECBA4, 3.5px 3.5px #DECBA4, 3.75px 3.75px #DECBA4, 4px 4px #DECBA4, 4.25px 4.25px #DECBA4, 4.5px 4.5px #DECBA4, 4.75px 4.75px #DECBA4, 5px 5px #DECBA4, 5.25px 5.25px #DECBA4, 5.5px 5.5px #DECBA4, 5.75px 5.75px #DECBA4, 6px 6px #DECBA4;
            animation-delay: 0.15s;
          }

          .playful span:nth-child(5n) {
            color: #414141;
            text-shadow: 0.25px 0.25px #DECBA4, 0.5px 0.5px #DECBA4, 0.75px 0.75px #DECBA4, 1px 1px #DECBA4, 1.25px 1.25px #DECBA4, 1.5px 1.5px #DECBA4, 1.75px 1.75px #DECBA4, 2px 2px #DECBA4, 2.25px 2.25px #DECBA4, 2.5px 2.5px #DECBA4, 2.75px 2.75px #DECBA4, 3px 3px #DECBA4, 3.25px 3.25px #DECBA4, 3.5px 3.5px #DECBA4, 3.75px 3.75px #DECBA4, 4px 4px #DECBA4, 4.25px 4.25px #DECBA4, 4.5px 4.5px #DECBA4, 4.75px 4.75px #DECBA4, 5px 5px #DECBA4, 5.25px 5.25px #DECBA4, 5.5px 5.5px #DECBA4, 5.75px 5.75px #DECBA4, 6px 6px #DECBA4;
            animation-delay: 0.4s;
          }

          .playful span:nth-child(7n), .playful span:nth-child(11n) {
            color: #414141;
            text-shadow: 0.25px 0.25px #DECBA4, 0.5px 0.5px #DECBA4, 0.75px 0.75px #DECBA4, 1px 1px #DECBA4, 1.25px 1.25px #DECBA4, 1.5px 1.5px #DECBA4, 1.75px 1.75px #DECBA4, 2px 2px #DECBA4, 2.25px 2.25px #DECBA4, 2.5px 2.5px #DECBA4, 2.75px 2.75px #DECBA4, 3px 3px #DECBA4, 3.25px 3.25px #DECBA4, 3.5px 3.5px #DECBA4, 3.75px 3.75px #DECBA4, 4px 4px #DECBA4, 4.25px 4.25px #DECBA4, 4.5px 4.5px #DECBA4, 4.75px 4.75px #DECBA4, 5px 5px #DECBA4, 5.25px 5.25px #DECBA4, 5.5px 5.5px #DECBA4, 5.75px 5.75px #DECBA4, 6px 6px #DECBA4;
            animation-delay: 0.25s;
          }

          @keyframes scatter {
            0% {
              top: 0;
            }
            50% {
              top: -7px;
            }
            100% {
              top: 0;
            }
          }
     
          h1 {
            font-size: 65px;
            font-family: 'Handjet', cursive;
            font-family: 'Roboto', sans-serif;
          }

     
          h2 {
            display: flex;
            position: relative;
            padding: 0 0.0625em;
            transform-style: preserve-3d;
            font: 900 10vw chilanka, segoe script, purisa, comic sans ms, cursive;
          }
          h2::after {
            position: absolute;
            top: calc(50% - .5*0.125em);
            right: 0;
            width: calc(50% + 50vw);
            height: 0.125em;
            border-radius: 0 0.125em 0.125em 0;
            background: #414141;
            animation: slide 2s ease-out;
            content: "";
          }

          @keyframes slide {
            0% {
              transform: translate(-100%);
            }
          }
          .letter {
            overflow: visible;
            white-space: pre;
            transform: rotatey(2deg) scalex(1.00061);
          }

          .rev {
            transform: rotatey(-2deg) scalex(1.00061);
          }

                     /* Chữ glow (sáng bóng) */
          .neon-text {
            font-size: 60px;
            font-weight: bold;
            color: #fff;
            text-shadow: 0 0 1px #fff, 0 0 2px #fff, 0 0 3px #fff, 0 0 4px #414141,
              0 0 7px #414141, 0 0 8px #414141,
              0 0 10px #414141, 0 0 15px #414141;
          }

          /* Hiệu ứng hoạt ảnh */
          @keyframes glowing {
            0% {
              opacity: 1.0;
            }
            50% {
              opacity: 0.6;
            }
            100% {
              opacity: 1.0;
            }
          }

          /* Áp dụng hoạt ảnh cho các ký tự */
          .neon-text .letter {
            animation: glowing 1.5s ease-in-out infinite;
          }

          /* Đảo ngược màu sáng và tối */
          .neon-text .rev {
            animation-direction: alternate;
          }
    </style>
    
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    <!-- Font Awesome -->
    <link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"
            integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>

      @livewireStyles

      <!-- Scripts -->
      @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="bg-gray-50 font-family-karla">


<!-- Text Header -->

        <header class="w-full container mx-auto relative header-video-container">
            <!-- Tạo lớp nền video -->
            <div class="absolute top-0 left-0 w-full h-full">
              <video autoplay loop muted playsinline class="w-full h-full object-cover">
                <!-- Đặt URL của video vào đây -->
                <source src="https://fiverr-res.cloudinary.com/video/upload/t_fiverr_hd/gjjnl1skf5zcrpxq3ay4" type="video/mp4">
              </video>
            </div>
          
            <div class="flex flex-col items-center py-12 relative z-10">
              <a class="font-bold text-white uppercase hover:text-gray-200 text-5xl mint"  href="{{route('home')}}">
                <div class="container">
                    <h3 class="title">
                      <span class="title-word title-word-1" >X</span>
                    </h3>
                  </div>
              </a>
              <a  href="{{route('home')}}" class="text-lg" style="color: white;">

                <div class="table center">
                    <div class="monitor-wrapper center">
                      <div class="monitor center">
                        <p>{!! App\Models\TextWidget::getContent('header-text-desc') !!}</p>
                      </div>
                    </div>
                  </div>
        
              </a>

            </div>
          </header>
          

<!-- Topic Nav -->
        <nav class="w-full  border-t border-b bg-gray-100" style="background-color: #decba453"  x-data="{ open: false }">

            <div class="block sm:hidden">
                <a
                    href="#"
                    class="block md:hidden text-base font-bold uppercase text-center flex justify-center items-center"
                    @click="open = !open"
                >
                    Topics <i :class="open ? 'fa-chevron-down': 'fa-chevron-up'" class="fas ml-2"></i>
                </a>
            </div>

            <div :class="open ? 'block': 'hidden'" class="w-full flex-grow sm:flex sm:items-center sm:w-auto">
                
                <div class="w-full container mx-auto flex sm:flex-row items-center justify-between text-sm font-bold uppercase mt-0 px-6 py-2">

                       <div>
                        
                              <a href="{{route('home')}}">
                                <h2 role="img" aria-label="Good day!" style="font-size: 60px;font-weight:bold" class="ml-20 neon-text">
                                  <span class="letter rev">I</span>
                                  <span class="letter">M</span>
                                  <span class="letter rev">D</span>
                                  <span class="letter rev">B</span>
                                </h2>
                              </a>
                       </div>

                       <div class="mr-20"  >

                            <a href="{{route('home')}}" class="hover:bg-gray-600 hover:text-white rounded py-2 px-4 mx-2">Home</a>

                            @foreach($categories as $category)

                                <a href="{{ route('by-category', $category) }}" class=" hover:bg-gray-600 hover:text-white rounded py-2 px-4 mx-2 {{ request('category')?->slug === $category->slug ? 'bg-gray-600 text-white' : '' }}">
                                  {{ $category->title }} 
                               </a>

                            @endforeach

                                <a href="{{route('about-us')}}" class="  hover:bg-gray-600 hover:text-white rounded py-2 px-4 mx-2">
                                    About Us
                                </a>


                       </div>

                       <div class="flex items-center">

                        <form method="get" action="{{route('search')}}">

                           <input name="q" value="{{request()->get('q')}}"
                                 class="block w-full rounded-md border-0 px-3.5 py-2 t0ext-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset sm:text-sm sm:leading-6 font-medium"
                                 placeholder="Tìm kiếm..."/>
                                 
                        </form>

                            @auth

                                <div class="flex sm:items-center sm:ml-6">

                                    <x-dropdown align="right" width="48">

                                        <x-slot name="trigger">

                                            <button class="hover:bg-gray-600 hover:text-white flex items-center rounded py-2 px-4 mx-2">
                                                
                                                <div>{{ Auth::user()->name }}</div>
                    
                                                <div class="ml-1">

                                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">

                                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />

                                                    </svg>

                                                </div>

                                            </button>

                                        </x-slot>
                    
                                        <x-slot name="content">

                                            <x-dropdown-link :href="route('profile.edit')">
                                                {{ __('Profile') }}
                                            </x-dropdown-link>
                    
                                            <!-- Authentication -->
                                            <form method="POST" action="{{ route('logout') }}">

                                                @csrf
                    
                                                <x-dropdown-link :href="route('logout')"
                                                        onclick="event.preventDefault();
                                                                    this.closest('form').submit();">
                                                    {{ __('Log out') }}
                                                </x-dropdown-link>

                                            </form>

                                        </x-slot>

                                    </x-dropdown>
                                </div>

                            @else

                                <a href="{{route('login')}}" class="hover:bg-gray-600 hover:text-white rounded py-2 px-4 mx-2">
                                    Login
                                </a>

                                <a href="{{route('register')}}" class="bg-gray-600 text-white rounded py-2 px-4 mx-2">
                                    Register
                                </a>
                                
                            @endauth

                       </div>
                    
                   
                </div>

            </div>

        </nav>

        <div class="container mx-auto  py-6">

            {{ $slot }}

        </div>
        
        <footer class="bg-white lg:grid lg:grid-cols-5">

            <div class="relative block h-32 lg:col-span-2 lg:h-full" >
              <img
                src="https://fiverr-res.cloudinary.com/images/q_auto,f_auto/gigs2/270181111/original/6c0ef22f6a68e2173711511d56348fd096dda62f/create-stunning-concept-art-using-midjourney-ai.jpg"
                alt=""
                class="absolute inset-0 h-full w-full object-cover"
               
              />
            </div>
          
            <div class="px-4 py-16 sm:px-6 lg:col-span-3 lg:px-8"  style="background-image: linear-gradient(to right, #debf82, #3E5151)">

              <div class="grid grid-cols-1 gap-8 sm:grid-cols-2">

                <div>

                  <p >

                    <span class="text-xs uppercase tracking-wide text-white">
                      Call us
                    </span>
          
                    <a
                      href="#"
                      class="block text-2xl font-medium text-white hover:opacity-75 sm:text-3xl"
                    >
                      0123456789
                    </a>

                  </p>
          
                  <ul class="mt-8 space-y-1 text-sm text-white">

                    <li>Monday to Friday: 10am - 5pm</li>
                    <li>Weekend: 10am - 3pm</li>

                  </ul>
          
                  <ul class="mt-8 flex gap-6">

                    <li>
                      <a
                        href="/"
                        rel="noreferrer"
                        target="_blank"
                        class="text-white transition hover:opacity-75"
                      >
                        <span class="sr-only">Facebook</span>
          
                        <svg
                          class="h-6 w-6"
                          fill="currentColor"
                          viewBox="0 0 24 24"
                          aria-hidden="true"
                        >
                          <path
                            fill-rule="evenodd"
                            d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                            clip-rule="evenodd"
                          />
                        </svg>
                      </a>
                    </li>
          
                    <li>
                      <a
                        href="/"
                        rel="noreferrer"
                        target="_blank"
                        class="text-white transition hover:opacity-75"
                      >
                        <span class="sr-only">Instagram</span>
          
                        <svg
                          class="h-6 w-6"
                          fill="currentColor"
                          viewBox="0 0 24 24"
                          aria-hidden="true"
                        >
                          <path
                            fill-rule="evenodd"
                            d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                            clip-rule="evenodd"
                          />
                        </svg>
                      </a>
                    </li>
          
                    <li>
                      <a
                        href="/"
                        rel="noreferrer"
                        target="_blank"
                        class="text-white transition hover:opacity-75"
                      >
                        <span class="sr-only">Twitter</span>
          
                        <svg
                          class="h-6 w-6"
                          fill="currentColor"
                          viewBox="0 0 24 24"
                          aria-hidden="true"
                        >
                          <path
                            d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"
                          />
                        </svg>
                      </a>
                    </li>
          
                    <li>
                      <a
                        href="/"
                        rel="noreferrer"
                        target="_blank"
                        class="text-white transition hover:opacity-75"
                      >
                        <span class="sr-only">GitHub</span>
          
                        <svg
                          class="h-6 w-6"
                          fill="currentColor"
                          viewBox="0 0 24 24"
                          aria-hidden="true"
                        >
                          <path
                            fill-rule="evenodd"
                            d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                            clip-rule="evenodd"
                          />
                        </svg>
                      </a>
                    </li>
          
                    <li>
                      <a
                        href="/"
                        rel="noreferrer"
                        target="_blank"
                        class="text-white transition hover:opacity-75"
                      >
                        <span class="sr-only">Dribbble</span>
          
                        <svg
                          class="h-6 w-6"
                          fill="currentColor"
                          viewBox="0 0 24 24"
                          aria-hidden="true"
                        >
                          <path
                            fill-rule="evenodd"
                            d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z"
                            clip-rule="evenodd"
                          />
                        </svg>
                      </a>
                    </li>

                  </ul>

                </div>
          
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                  <div>
                    <p class="font-medium text-white">Services</p>
          
                    <ul class="mt-6 space-y-4 text-sm">
                      <li>
                        <a href="#" class="text-white transition hover:opacity-75">
                          1on1 Coaching
                        </a>
                      </li>
          
                      <li>
                        <a href="#" class="text-white transition hover:opacity-75">
                          Company Review
                        </a>
                      </li>
          
                      <li>
                        <a href="#" class="text-white transition hover:opacity-75">
                          Accounts Review
                        </a>
                      </li>
          
                      <li>
                        <a href="#" class="text-white transition hover:opacity-75">
                          HR Consulting
                        </a>
                      </li>
          
                      <li>
                        <a href="#" class="text-white transition hover:opacity-75">
                          SEO Optimisation
                        </a>
                      </li>
                    </ul>
                  </div>
          
                  <div>
                    <p class="font-medium text-white">Company</p>
          
                    <ul class="mt-6 space-y-4 text-sm">
                      <li>
                        <a href="#" class="text-white transition hover:opacity-75">
                          About
                        </a>
                      </li>
          
                      <li>
                        <a href="#" class="text-white transition hover:opacity-75">
                          Meet the Team
                        </a>
                      </li>
          
                      <li>
                        <a href="#" class="text-white transition hover:opacity-75">
                          Accounts Review
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>

              </div>
          
              <div class="mt-12 border-t border-gray-100 pt-12">
                <div class="sm:flex sm:items-center sm:justify-between">
                  <ul class="flex flex-wrap gap-4 text-xs">
                    <li>
                      <a href="#" class="text-white transition hover:opacity-75">
                        Terms & Conditions
                      </a>
                    </li>
          
                    <li>
                      <a href="#" class="text-white transition hover:opacity-75">
                        Privacy Policy
                      </a>
                    </li>
          
                    <li>
                      <a href="#" class="text-white transition hover:opacity-75">
                        Cookies
                      </a>
                    </li>
                  </ul>
          
                  <p class="mt-8 text-xs text-white sm:mt-0">
                    &copy; 2022. Company Name. All rights reserved.
                  </p>
                </div>
              </div>

            </div>

          </footer>
       
          
 
 @livewireScripts

</body>

</html>