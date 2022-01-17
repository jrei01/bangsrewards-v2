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
       
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer> </script>

    </head>
    <body class="antialiased font-body bg-bg-main-img bg-no-repeat bg-cover">
        <div class="h-screen w-full bg-black opacity-90">
            <div class="flex justify-center items-center w-full h-12 border-gray-900 text-center text-white text-xs space-x-20">    
                <a href="#" class="pt-4 transform hover:text-amber-400 focus:text-amber-400 focus:border-b cursor-pointer transition ease-in-out duration-400 relative group">CHECK BALANCE
                    <div class="absolute w-full h-0.5 bg-white transform scale-x-0 group-hover:scale-x-100 group-focus:scale-x-100 translate-transform transition ease-in-out duration-500"></div>
                </a>
                <a href="#" class="pt-4 transform hover:text-amber-400 focus:text-amber-400 cursor-pointer transition ease-in-out duration-400 relative group">ACTIVATE
                    <div class="absolute w-full h-0.5 bg-white transform scale-x-0 group-hover:scale-x-100 group-focus:scale-x-100 translate-transform transition ease-in-out duration-500"></div>
                </a>
                <a href="#" class="pt-4 transform hover:text-amber-400 focus:text-amber-400 cursor-pointer transition ease-in-out duration-400 relative group">HOW TO ENJOY
                    <div class="absolute w-full h-0.5 bg-white transform scale-x-0 group-hover:scale-x-100 group-focus:scale-x-100 translate-transform transition ease-in-out duration-500"></div>
                </a>
                <a href="#" class="pt-4 transform hover:text-amber-400 focus:text-amber-400 cursor-pointer transition ease-in-out duration-400 relative group">TERMS & CONDITIONS
                    <div class="absolute w-full h-0.5 bg-white transform scale-x-0 group-hover:scale-x-100 group-focus:scale-x-100 translate-transform transition ease-in-out duration-500"></div>
                </a>
                <a href="#" class="pt-4 transform hover:text-amber-400 focus:text-amber-400 cursor-pointer transition ease-in-out duration-500 relative group">HELP
                    <div class="absolute w-full h-0.5 bg-white transform scale-x-0 group-hover:scale-x-100 group-focus:scale-x-100 translate-transform transition ease-in-out duration-500"></div>
                </a>
            </div>
            
            <div class="items-center">
                <div class="flex justify-center pt-16 flex-col w-full h-full items-center">
                    <div class="bg-transparent transform h-1/6 w-1/6">
                        <img src="/images/rewardslogotransparent.png" alt="">
                    </div>
                    <div class="antialiased pt-5 pb-10 pl-3 pr-3 w-2/5 h-4/6 text-white font-normal leading-relaxed text-sm text-center tracking-wider text-justify">
                        <p><a class="text-amber-400" href="">BANGS REWARDS</a> is a loyalty program that GRANT 5% of the total amount spent to be earn as points that can be redeem as service or product at Bangs Prime Salon, Tony & Jackey and T&J Salon Professionals.</p>
                    </div>
                    <div  class="h-1/4 w-1/4">
                        <img class="rounded-lg hover:shadow-lg opacity-80 hover:opacity-100 transition ease-in-out duration-500" src="/images/rewardscard.png" alt="">
                        <div class="w-full flex flex-row space-x-4">
                            <button class="w-1/2 h-10 mt-3 border border-white text-xs text-white hover:shadow-lg hover:text-amber-400 hover:bg-gray-600 bg-opacity-30 transition ease-in-out duration-500">ACTIVATE</button>
                            <button class="w-1/2 h-10 mt-3 border border-white text-xs text-white hover:shadow-lg hover:text-amber-400 hover:bg-gray-600 bg-opacity-30 transition ease-in-out duration-500">CHECK BALANCE</button>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </body>
</html>
