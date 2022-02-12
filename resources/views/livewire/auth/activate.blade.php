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
         
         <div class="flex flex-wrap flex-row justify-center mt-6 gap-10 font-normal leading-relaxed tracking-wide transition duration-500"> 

            <x-input.group label="FIRST NAME" for="firstname" :error="$errors->first('firstName')">
               <x-input.text wire:model="firstName" id="firstName" type="text" placeholder="Enter your first name" />
            </x-input.group>

            <x-input.group label="LAST NAME" for="lastname" :error="$errors->first('lastName')">
               <x-input.text wire:model="lastName" id="lastName" type="text" placeholder="Enter your last name" />
            </x-input.group>

            <x-input.group label="GENDER" for="gender" :error="$errors->first('gender')">
               <x-input.text wire:model="gender" id="gender" type="text" placeholder="Enter your gender" />
            </x-input.group>

            <x-input.group label="CITY" for="city" :error="$errors->first('city')">
               <x-input.text wire:model="city" id="city" type="text" placeholder="Enter your city" />
            </x-input.group>

            <x-input.group label="MOBILE" for="mobile" :error="$errors->first('mobile')">
               <x-input.text wire:model="mobile" id="mobile" type="text" placeholder="Enter your mobile number" />
            </x-input.group>
            
            <x-input.group label="BIRTHDATE" for="birthdate" :error="$errors->first('birthDate')">
               <x-input.text wire:model="birthDate" id="birthdate" type="date" placeholder="Enter your birthday" />
            </x-input.group>
            
            <x-input.group label="CARD NUMBER" for="cardnumber" >
               <x-input.text wire:model="cardNumber" id="cardnumber" type="text" placeholder="Enter your card number (optional)" />
            </x-input.group>

            <x-input.group label="EMAIL" for="email" :error="$errors->first('email')">
               <x-input.text wire:model="email" id="email" type="text" placeholder="Enter your email address" />
            </x-input.group>
                   
            
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
