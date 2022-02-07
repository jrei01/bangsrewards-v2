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
            <!-- @if ($activated)   
               <div class="w-full bg-gray-600 pointer-events-auto">
                  <div class="overflow-hidden">
                     <div class="p-3">
                        <div class="flex items-start">
                           <div class="flex-shrink-0">
                              <svg class="h-6 w-6 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                              </svg>
                           </div>
                           <div class="ml-3 w-0 flex-1 pt-0.5">
                              <p class="text-sm leading-5 font-medium text-gray-300">
                                 Successfully activated!
                              </p>
                           </div>
                           <div class="ml-4 flex-shrink-0 flex">
                              <button wire:click="$set('activated', false)" type="button" class="inline-flex text-gray-400 focus:outline-none focus:text-gray-500 transition ease-in-out duration-150">
                                 <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                                 </svg>
                              </button>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            @endif -->
         <div class="flex flex-wrap flex-row justify-center mt-6 gap-10 font-normal leading-relaxed tracking-wide"> 
            <div class="flex flex-wrap flex-col text-xs">
               <label for="firstname" class="text-amber-400 opacity-90">FIRST NAME</label>
               <input wire:model="firstName" id="firstName" type="text" placeholder="Enter your first name" name="" class="@error('firstName') border-red-500 @enderror h-10 w-80 mt-1 px-4 text-white border border-gray-400 bg-transparent outline-none text-xs focus:bg-gray-600 focus:border-amber-400">
               @error('firstName') <span class="text-red-500 text-xs pt-2 opacity-100">{{ $message }}</span> @enderror
            </div>
            <div class="flex flex-wrap flex-col text-xs">
               <label for="lastname" class="text-amber-400 opacity-90">LAST NAME</label>
               <input wire:model="lastName" id="lastname" type="text" placeholder="Enter your last name" class="@error('lastName') border-red-500 @enderror h-10 w-80 mt-1 px-4 text-white border border-gray-400 bg-transparent outline-none text-xs focus:bg-gray-600 focus:border-amber-400">         
               @error('lastName') <span class="text-red-500 text-xs pt-2">{{ $message }}</span> @enderror
            </div>
            <div class="flex flex-wrap flex-col text-xs">
               <label for="gender" class="text-amber-400 opacity-90">GENDER</label>
               <input  wire:model="gender" id="gender" type="text" placeholder="Enter your gender" class="@error('gender') border-red-500 @enderror h-10 w-80 mt-1 px-4 text-white border border-gray-400 bg-transparent outline-none text-xs focus:bg-gray-600 focus:border-amber-400">         
               @error('gender') <span class="text-red-500 text-xs pt-2">{{ $message }}</span> @enderror
            </div>
            <div class="flex flex-wrap flex-col text-xs">
               <label for="city" class="text-amber-400 opacity-90">CITY</label>
               <input  wire:model="city" id="city" type="text" placeholder="Enter your city" class="@error('city') border-red-500 @enderror h-10 w-80 mt-1 px-4 text-white border border-gray-400 bg-transparent outline-none text-xs focus:bg-gray-600 focus:border-amber-400">         
               @error('city') <span class="text-red-500 text-xs pt-2">{{ $message }}</span> @enderror
            </div>
            <div class="flex flex-wrap flex-col text-xs">
               <label for="mobile" class="text-amber-400 opacity-90">MOBILE</label>
               <input wire:model="mobile" id="mobile" type="text" placeholder="Enter your mobile number" class="@error('mobile') border-red-500 @enderror h-10 w-80 mt-1 px-4 text-white border border-gray-400 bg-transparent outline-none text-xs focus:bg-gray-600 focus:border-amber-400">         
               @error('mobile') <span class="text-red-500 text-xs pt-2">{{ $message }}</span> @enderror
            </div>
            <div class="flex flex-wrap flex-col text-xs">
               <label for="birthdate" class="text-amber-400 opacity-90">BIRTHDATE</label>
               <input wire:model="birthDate" id="birthdate" type="text" placeholder="Enter your birthday" class="@error('birthDate') border-red-500 @enderror h-10 w-80 mt-1 px-4 text-white border border-gray-400 bg-transparent outline-none text-xs focus:bg-gray-600 focus:border-amber-400">         
               @error('birthdate') <span class="text-red-500 text-xs pt-2">{{ $message }}</span> @enderror
            </div>        
            <div class="flex flex-wrap flex-col text-xs">
               <label for="cardnumber" class="text-amber-400 opacity-90">CARD NUMBER</label>
               <input wire:model="cardNumber" id="cardnumber" type="text" placeholder="Enter your card number (optional)" class="@error('cardNumber') border-red-500 @enderror h-10 w-80 mt-1 px-4 text-white border border-gray-400 bg-transparent outline-none text-xs focus:bg-gray-600 focus:border-amber-400">         
            </div> 
            <div class="flex flex-wrap flex-col text-xs">
               <label for="email" class="text-amber-400 opacity-90">Email</label>
               <input wire:model="email" id="email" type="text" placeholder="Enter your email" class="@error('email') border-red-500 @enderror h-10 w-80 mt-1 px-4 text-white border border-gray-400 bg-transparent outline-none text-xs focus:bg-gray-600 focus:border-amber-400">         
               @error('email') <span class="text-red-500 text-xs pt-2">{{ $message }}</span> @enderror
            </div>
            <div class="flex flex-wrap flex-col text-xs w-full items-center">
               <div class="h-6 flex justify-center items-center">
                  <input type="checkbox" class="text-white mr-2">
                  <p class="text-gray-400 hover:text-gray-300 ">I accept the terms and conditions</p>
               </div>
               <a href="" class="text-white mt-2">TERMS & CONDITIONS</a>
               <button class="w-80 h-10 mt-6 border border-white text-xs text-white hover:shadow-lg hover:text-amber-400 hover:border-amber-400 bg-gray-800 hover:bg-gray-600 bg-opacity-70 transition ease-in-out duration-500">ACTIVATE</button>
            </div>
      </form>
   </div>
</div>
