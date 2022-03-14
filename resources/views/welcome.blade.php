<x-layouts.base>
        
    <div class="max-w-3xl mx-auto h-screen z-0"> 

        <div class="w-full">
            <div class="flex justify-center pt-20 flex-col w-full h-full items-center">
                <div class="flex justify-center bg-transparent transform h-1/6 w-4/6">
                    <a href="/">
                        <img class="h-28 sm:h-32 opacity-90 hover:opacity-100" src="/images/rewardslogotransparent.png" alt="">
                    </a>
                </div>
                <div class="antialiased pt-7 pb-10 pl-16 pr-16 w-full  h-4/6 text-white font-normal leading-relaxed text-sm text-center tracking-wider text-justify opacity-90 hover:opacity-100">
                    <p><a class="text-amber-400" href="">BANGS REWARDS</a> is a loyalty program that GRANTS 5% of the total amount spent to be earn as points that can be redeem as service or product at Bangs Prime Salon, Tony & Jackey, and T&J Salon Professionals.</p>
                </div>
                <div  class="flex flex-col items-center h-2/4 w-4/5 sm:w-96 md:w-1/2  pl-2 pr-2">
                    <img class="mt-4 w-full h-full rounded-lg opacity-80 hover:opacity-100 transition ease-in-out duration-500" src="/images/rewardscard.png" alt="">
                    <div class="w-full flex flex-row space-x-4">                                
                        <a href="{{ route('activate') }}" class="w-1/2 h-12 mt-3 border border-white text-xs text-center pt-4 text-white hover:shadow-lg hover:text-amber-400 hover:border-amber-400 bg-gray-800 hover:bg-gray-600 bg-opacity-70 transition ease-in-out duration-500">ACTIVATE</a>
                        <a href="{{ route('activities') }}" class="w-1/2 h-12 mt-3 border border-white text-xs text-center pt-4 text-white hover:shadow-lg hover:text-amber-400 hover:border-amber-400 bg-gray-800 hover:bg-gray-600 bg-opacity-70 transition ease-in-out duration-500">CHECK BALANCE</a>
                    </div>
                </div>
            </div>    
        </div>
        
        <div class="w-full flex flex-col justify-center mt-16 items-center">
            <p class="text-white items-center text-md sm:text-lg text-amber-400">PARTNERS</p>
            <div class="flex flex-row justify-center w-3/5 h-20 sm:h-20  space-x-5 sm:space-x-10 sm:mt-0 items-center">
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
 
</x-layouts.base>