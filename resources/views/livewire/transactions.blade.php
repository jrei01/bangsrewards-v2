<div class="flex flex-wrap justify-center items-center max-w-3xl mx-auto h-full"> 
   <div class="w-full h-4/5 m-5 p-4">
      <div class="flex justify-center bg-transparent transform h-1/6 w-full mb-4">
            <img class="h-28 sm:h-32 opacity-90 hover:opacity-100" src="/images/rewardslogotransparent.png" alt="">
      </div>
      <div class="border-b border-gray-600 font-normal leading-relaxed tracking-wide opacity-90 hover:opacity-100 space-y-2 m-2">
         <p class="text-lg text-amber-400">CARD ACTIVATION</p>
         <p class="text-sm text-white pb-2">Please enter card holder's information.</p>
      </div>
      <form wire:submit.prevent="activate" id="activate" class="mt-6 font-normal leading-relaxed tracking-wide m-2">
         @csrf

         <x-notification />
         
      </form>
   </div>
</div>
