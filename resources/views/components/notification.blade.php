<div 
    x-data="{ open: false }"
    x-init="
            @this.on('notify-saved', () => {

                setTimeout(() => { open = false }, 1000); 
                open = true;
                   
            })"
    x-show="open"
    x-transition.out.duration.500ms
    class="w-full bg-gray-600 pointer-events-auto">

    <div class="w-full  pointer-events-auto"> 
        <div class="rounded-lg shadow-xs overflow-hidden">
            <div class="p-3">
                <div class="flex items-start">
                <div class="flex-shrink-0">
                    <svg class="h-6 w-6 text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <div class="ml-3 w-0 flex-1 pt-0.5 text-gray-400">
                    <p class="text-sm leading-5 font-medium text-gray-200">Successfully activated!</p>
                </div>
                <div class="ml-4 flex-shrink-0 flex">
                    <button @click="show = false" class="inline-flex text-gray-400 focus:outline-none focus:text-gray-500 transition ease-in-out duration-150">
                        <svg class="h-4 w-4 mt-1" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>