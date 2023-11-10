<div>

    <div x-data="{
               focused : {{ $parentComment ? 'true' : 'false' }},
               isEdit: {{ $commentModel ? 'true' : 'false' }}, 
               init() {
                    if(this.isEdit || this.focused) 
                       this.$refs.input.focus() 
                    $wire.on('commentCreated', () => {
                        this.focused = false;
                    })
                }
            }"  class="mb-4" >

        <div class="mb-2">
            <textarea x-ref="input" wire:model="comment" @click="focused = true " class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Viết gì đó đi bạn..." :rows="isEdit || focused ? '3' : '1'"></textarea>

            
        </div>
    
       <div :class="isEdit || focused ? '' : 'hidden'"  class="flex gap-4">

            <button wire:click="createComment" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 mr-3">
                Bình luận
            </button>
        
        
            <button @click="focused = false; isEdit = false; $wire.emitUp('cancelEditing') " type="button">
                Hủy
            </button>

       </div>

    </div>

</div>
