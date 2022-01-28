<div class="flex flex-wrap justify-center items-center max-w-3xl mx-auto h-full"> 
   <div class="w-full h-4/5 m-5 p-4">
      <div class="flex justify-center bg-transparent transform h-1/6 w-full mb-4">
            <img class="h-28 sm:h-32 opacity-90 hover:opacity-100" src="/images/rewardslogotransparent.png" alt="">
      </div>
      <div class="border-b border-gray-600 font-normal leading-relaxed tracking-wide opacity-90 hover:opacity-100 space-y-2">
         <p class="text-lg text-amber-400 ml-2">CARD ACTIVATION</p>
         <p class="text-sm text-white ml-2 pb-2">Please enter card holder's information.</p>
      </div>
      <form wire:submit.prevent="activate" id="activate" class="flex flex-wrap flex-row justify-center mt-6 gap-10 font-normal leading-relaxed tracking-wide">
         @csrf
         <div class="flex flex-wrap flex-col text-xs">
            <label for="firstname" class="text-amber-400 opacity-90">FIRST NAME</label>
            <input wire:model="firstName" id="firstName" type="text" placeholder="Enter your first name" name="" class="@error('firstName') border-red-500 @enderror h-10 w-80 mt-1 px-4 text-white border border-gray-400 bg-transparent outline-none text-xs focus:bg-gray-600 focus:border-amber-400">
            @error('firstName') <span class="text-red-500 text-xs pt-2 opacity-100">{{ $message }}</span> @enderror
         </div>
         <div class="flex flex-wrap flex-col text-xs">
            <label for="lastname" class="text-amber-400 opacity-90">LAST NAME</label>
            <input wire:model="lastName" id="lastname" type="text" placeholder="Enter your last name" name="" class="@error('lastName') border-red-500 @enderror h-10 w-80 mt-1 px-4 text-white border border-gray-400 bg-transparent outline-none text-xs focus:bg-gray-600 focus:border-amber-400">         
            @error('lastName') <span class="text-red-500 text-xs pt-2">{{ $message }}</span> @enderror
         </div>
         <div class="flex flex-wrap flex-col text-xs">
            <label for="gender" class="text-amber-400 opacity-90">GENDER</label>
            <input  id="gender" type="text" placeholder="Enter your gender" name="" class="@error('gender') border-red-500 @enderror h-10 w-80 mt-1 px-4 text-white border border-gray-400 bg-transparent outline-none text-xs focus:bg-gray-600 focus:border-amber-400">         
            <span class="text-red-500 text-xs pt-2"></span>
         </div>
         <div class="flex flex-wrap flex-col text-xs">
            <label for="city" class="text-amber-400 opacity-90">CITY</label>
            <input  id="city" type="text" placeholder="Enter your city" name="" class="@error('city') border-red-500 @enderror h-10 w-80 mt-1 px-4 text-white border border-gray-400 bg-transparent outline-none text-xs focus:bg-gray-600 focus:border-amber-400">         
            <span class="text-red-500 text-xs pt-2"></span>
         </div>
         <div class="flex flex-wrap flex-col text-xs">
            <label for="mobile" class="text-amber-400 opacity-90">MOBILE</label>
            <input wire:model="mobile" id="mobile" type="text" placeholder="Enter your mobile number" name="" class="@error('mobile') border-red-500 @enderror h-10 w-80 mt-1 px-4 text-white border border-gray-400 bg-transparent outline-none text-xs focus:bg-gray-600 focus:border-amber-400">         
            @error('mobile') <span class="text-red-500 text-xs pt-2">{{ $message }}</span> @enderror
         </div>
         <div class="flex flex-wrap flex-col text-xs">
            <label for="birthdate" class="text-amber-400 opacity-90">BIRTHDATE</label>
            <input wire:model="birthDate" id="birthdate" type="text" placeholder="Enter your birthday" name="" class="@error('birthDate') border-red-500 @enderror h-10 w-80 mt-1 px-4 text-white border border-gray-400 bg-transparent outline-none text-xs focus:bg-gray-600 focus:border-amber-400">         
            <span class="text-red-500 text-xs pt-2"></span>
         </div>        
         <div class="flex flex-wrap flex-col text-xs">
            <label for="cardnumber" class="text-amber-400 opacity-90">CARD NUMBER</label>
            <input wire:model="cardNumber" id="cardnumber" type="text" placeholder="Enter your card number (optional)" name="" class="@error('cardNumber') border-red-500 @enderror h-10 w-80 mt-1 px-4 text-white border border-gray-400 bg-transparent outline-none text-xs focus:bg-gray-600 focus:border-amber-400">         
            <span class="text-red-500 text-xs pt-2"></span>
         </div> 
         <div class="flex flex-wrap flex-col text-xs">
            <label for="email" class="text-amber-400 opacity-90">Email</label>
            <input wire:model="email" id="email" type="text" placeholder="Enter your email" name="" class="@error('email') border-red-500 @enderror h-10 w-80 mt-1 px-4 text-white border border-gray-400 bg-transparent outline-none text-xs focus:bg-gray-600 focus:border-amber-400">         
            @error('email') <span class="text-red-500 text-xs pt-2">{{ $message }}</span> @enderror
         </div>
         <div class="flex flex-wrap flex-col text-xs opacity-90 hover:opacity-100">
            <input  type="submit" class="w-80 h-12 mt-3 border border-white text-xs text-white hover:shadow-lg hover:text-amber-400 bg-gray-600 hover:bg-gray-800 bg-opacity-70 transition ease-in-out duration-500">ACTIVATE</input>
         </div> 
      </form>
   </div>
</div>
