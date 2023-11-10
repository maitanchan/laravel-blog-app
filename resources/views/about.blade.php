<x-app-layout meta-title="About Us" >
 <!-- Post Section -->
    <section class="w-full  flex flex-col items-center px-3">
        
        <article class="flex flex-col shadow my-4">
            <!-- Article Image -->
            <a href="#" class="hover:opacity-75" style="display: block; max-width: 700px; margin: 0 auto; overflow: hidden;">
                <img src="/storage/{{ $widget->image }}" alt="Thumbnail" style="width: 100%; height: auto;">
            </a>

            <div class="bg-white flex flex-col justify-start p-6">
            
              
                <h1 class="text-3xl font-bold hover:text-gray-700 pb-4">
                    {{ $widget->title}}  
                </h1>
                
                <div>
                    {!! $widget->content !!}
                </div>

            </div>
        </article>

        
    <br>
    </section>

</x-app-layout>