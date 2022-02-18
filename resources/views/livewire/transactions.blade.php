<div class="flex flex-wrap justify-center items-center max-w-3xl mx-auto h-full"> 
   <div class="w-full h-4/5 m-5 p-4">
      
      <div class="flex flex-wrap flex-row justify-between text-xs m-2 pb-6 font-normal leading-relaxed tracking-widest mt-6 opacity-90">
         <div class="flex flex-col  w-1/2">
            <label for="cardnumber" class="text-amber-400">CARD NUMBER</label>
            <input wire:model="cardNumber" class="h-12 w-full px-4 text-white text-center border bg-transparent outline-none text-2xl bg-gray-600 border-amber-400" placeholder="Enter your Card Number">
         </div>
         <div class="flex flex-col w-2/5 ">
            <label for="points" class="w-full text-amber-400 text-center">CURRENT POINTS</label>
            @if ($points > 0)
               
               <span wire:model="points" class="h-12 w-full text-amber-400 text-center bg-transparent text-5xl transform transition ">{{ $points }}</span>
               
            @endif
            </div>
      </div>



      <div class="border-b border-gray-600 font-normal leading-relaxed tracking-wide opacity-90 hover:opacity-100 space-y-2 m-2 mt-6">
         <p class="text-xl text-white">TRANSACTIONS</p>
             
      </div>

      <div class="flex flex-col space-y-2 m-2">
         <x-table>

            <x-slot name="head">

               <x-table.heading>Branch</x-table.heading>
               <x-table.heading>Type</x-table.heading>
               <x-table.heading>Amount</x-table.heading>
               <x-table.heading>Date</x-table.heading>       

            </x-slot>

            <x-slot name="body">

               @foreach ($activities as $activity)
               <x-table.row>
                  
                  <x-table.cell>{{ $activity->branch_name }}</x-table.cell>
                  <x-table.cell>{{ ucfirst(trans($activity->transactionType)) }}</x-table.cell>

                  @if ($activity->transactionType === 'earn')
                     <x-table.cell>{{ $activity->earnPoints }}</x-table.cell>
                     
                  @elseif ($activity->transactionType === 'redeem')

                     <x-table.cell>
                        
                        {{ $activity->redeemPoints }}
                    
                     
                     </x-table.cell>
                     
                  @elseif ($activity->transactionType === 'preload')
                     <x-table.cell>{{ $activity->preloadPoints }}</x-table.cell>
                     
                  @endif
                  
                  <x-table.cell>{{ date('M, j Y', strtotime($activity->created_at)) }}</x-table.cell>
                  
               </x-table.row>
               @endforeach

               
            </x-slot>
            
         </x-table>
         {{ $activities->links() }}
         
      </div>
   </div>
</div>
