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
        <div class="h-screen flex justify-center w-full bg-black opacity-90">
            <div class="w-full">
                <div class="flex justify-center items-center w-full h-12 border-gray-900 text-center text-white text-xs opacity-0 sm:opacity-100 sm:space-x-5 lg:space-x-14 xl:space-x-20">    
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
                
                <div class="w-full">
                    <div class="flex justify-center sm:pt-5 lg:pt-10 xl:pt-16 flex-col w-full h-full items-center">
                        <div class="flex justify-center bg-transparent transform h-1/6 w-4/6 sm:w-1/2 lg:w-1/2 xl:w-1/6">
                            <img class="h-28 sm:h-32" src="/images/rewardslogotransparent.png" alt="">
                        </div>
                        <div class="antialiased pt-5 pb-10 pl-3 pr-3 w-4/5 md:w-1/2 lg:w-3/5 xl:w-2/5 h-4/6 text-white font-normal leading-relaxed text-sm text-center tracking-wider text-justify">
                            <p><a class="text-amber-400" href="">BANGS REWARDS</a> is a loyalty program that GRANTS 5% of the total amount spent to be earn as points that can be redeem as service or product at Bangs Prime Salon, Tony & Jackey, and T&J Salon Professionals.</p>
                        </div>
                        <div  class="flex flex-col items-center h-1/4 w-4/5 sm:w-96 xl:w-1/4 xl:h-1/4 pl-2 pr-2">
                            <img class="sm:h-56 sm:w-96 xl:w-full xl:h-full rounded-lg hover:shadow-lg opacity-80 hover:opacity-100 transition ease-in-out duration-500" src="/images/rewardscard.png" alt="">
                            <div class="w-full flex flex-row space-x-4">
                                <button class="w-1/2 h-12 mt-3 border border-white text-xs text-white hover:shadow-lg hover:text-amber-400 hover:border-amber-400 hover:bg-gray-600 bg-opacity-30 transition ease-in-out duration-500">ACTIVATE</button>
                                <button class="w-1/2 h-12 mt-3 border border-white text-xs text-white hover:shadow-lg hover:text-amber-400 hover:border-amber-400 hover:bg-gray-600 bg-opacity-30 transition ease-in-out duration-500">CHECK BALANCE</button>
                            </div>
                        </div>
                    </div>    
                </div>
                
                <div class="w-full flex flex-col justify-center mt-20 items-center">
                    <p class="text-white items-center text-md sm:text-lg text-amber-400">PARTNERS</p>
                    <div class="flex flex-row justify-center w-1/2 h-20 sm:h-20  space-x-5 sm:space-x-10 sm:mt-0 items-center">    
                        <div class="h-12 sm:h-12 opacity-80 hover:opacity-100 w-32 sm:w-40">
                            <a href="">
                                <img src="/images/bangsprimelogo.png" alt="">
                            </a>   
                        </div>
                        <div class="h-12 sm:h-12 opacity-80 hover:opacity-100 w-32 pt-1 sm:pt-4 sm:w-40">
                            <a href="">
                                <img src="/images/tonyandjackeylogo.png" alt="">
                            </a>
                        </div>
                        <div class="h-12 sm:h-12 opacity-80 hover:opacity-100 w-32 sm:w-40">
                            <a href="http://www.tandjsalon.com/" target="_blank">
                                <img src="/images/tnjprologo.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="w-full flex flex-col justify-center mt-8 items-center">
                    <p class="text-white items-center text-xs text-white">SOCIAL MEDIA</p>
                    <div class="flex flex-row justify-center w-1/2 h-20 sm:h-20 space-x-5 sm:space-x-10 items-center">    
                        <div class="h-6  opacity-80 hover:opacity-100 w-6">
                            <a href="">
                                <img src="/images/fbicon.png" alt="">
                            </a>   
                        </div>
                        <div class="h-6  opacity-80 hover:opacity-100 w-6">
                            <a href="">
                                <img src="/images/instagrapicon.png" alt="">
                            </a>
                        </div>
                        <div class="h-6  opacity-80 hover:opacity-100 w-6">
                            <a href="http://www.tandjsalon.com/" target="_blank">
                                <img src="/images/twittericon.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
