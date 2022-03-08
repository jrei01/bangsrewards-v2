<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> 

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Alpine -->
        <script defer src="https://unpkg.com/alpinejs@3.8.1/dist/cdn.min.js"></script>
       
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer> </script>

        <!-- Tailwind -->
        <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css">

        @livewireStyles

    </head>
    <body class="antialiased flex flex-wrap flex-col w-full h-full font-body bg-bg-main-img bg-no-repeat bg-cover" x-data="{navOpen: false}">
        <div class="w-full bg-black opacity-90  h-screen">
            <nav class="max-w-3xl mx-auto  flex inline-flex flex-col mb-0 fixed inset-x-0 sm:flex-row w-full flex-wrap justify-center bg-transparent"
                :class="navOpen ? 'z-10' : '' ">
                <button class="pt-3 pl-4 w-8 sm:w-0 sm:pt-0 opacity-100 sm:opacity-0 text-white items-center hover:text-amber-400 transition ease-in-out duration-600"
                        x-on:click="navOpen  = ! navOpen">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg> 
                </button>
                <div class="flex flex-wrap inline-flex flex-auto text-white text-xs rounded-md justify-center flex-col sm:flex-row items-left bg-gray-600 bg-opacity-90
                            sm:bg-transparent ml-4 mr-4 mb-4 pl-4 pr-4 pb-4 sm:m-0 sm:items-center h-42 sm:h-12 sm:text-center 
                            sm:space-x-9 md:space-x-14  opacity-100 scale-0 sm:scale-100 transform origin-top-left"
                    :class="navOpen ? 'scale-100 origin-top-left' : 'scale-0 opacity-0 origin-top-left' "> 
                    <a href="{{ route('activities') }}" class="pt-4 transform hover:text-amber-400 focus:text-amber-400 focus:border-b cursor-pointer transition ease-in-out duration-400 relative group">CHECK BALANCE
                        <div class="absolute sm:w-full h-0.5 bg-white transform scale-x-0 group-hover:scale-x-100 group-focus:scale-x-100 translate-transform transition ease-in-out duration-500"></div>
                    </a>
                    <a href="{{ route('activate') }}" class="pt-4 transform hover:text-amber-400 focus:text-amber-400 cursor-pointer transition ease-in-out duration-400 relative group">ACTIVATE
                        <div class="absolute sm:w-full h-0.5 bg-white transform scale-x-0 group-hover:scale-x-100 group-focus:scale-x-100 translate-transform transition ease-in-out duration-500"></div>
                    </a>
                    <a href="#" class="pt-4 transform hover:text-amber-400 focus:text-amber-400 cursor-pointer transition ease-in-out duration-400 relative group">HOW TO ENJOY
                        <div class="absolute sm:w-full h-0.5 bg-white transform scale-x-0 group-hover:scale-x-100 group-focus:scale-x-100 translate-transform transition ease-in-out duration-500"></div>
                    </a>
                    <a href="#" class="pt-4 transform hover:text-amber-400 focus:text-amber-400 cursor-pointer transition ease-in-out duration-400 relative group">TERMS & CONDITIONS
                        <div class="absolute sm:w-full h-0.5 bg-white transform scale-x-0 group-hover:scale-x-100 group-focus:scale-x-100 translate-transform transition ease-in-out duration-500"></div>
                    </a>
                    <a href="#" class="pt-4 transform hover:text-amber-400 focus:text-amber-400 cursor-pointer transition ease-in-out duration-500 relative group">HELP
                        <div class="absolute sm:w-full h-0.5 bg-white transform scale-x-0 group-hover:scale-x-100 group-focus:scale-x-100 translate-transform transition ease-in-out duration-500"></div>
                    </a>
                </div>
            </nav>
        
            {{ $slot }}

        </div>

        

        @livewireScripts
        
    </body>
</html>
