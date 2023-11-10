<article class="bg-white flex flex-col shadow my-4 shadow-md " >
    <!-- Article Image -->
    <a href="{{ route('view', $post) }}" class="hover:opacity-75" style="display: block; max-width: 500px; margin: 0 auto; overflow: hidden;">
        <img src="{{$post->getThumbnail()}}" alt="{{$post->title}}" style="aspect-ratio: 4/3; object-fit: contain;">
    </a>
    
    <div class="bg-white flex flex-col justify-start p-6 mb-50" style="position: relative; bottom:35px">

        <div class="flex gap-4 mb-3">

            @foreach ($post->categories as $category)
            
                <a class="bg-blue-500 text-white p-1 rounded text-sm font-bold  ">
                    {{ $category->title}}
                </a>

            @endforeach

        </div>
 
        <a href="{{ route('view', $post) }}" class="text-2xl font-bold hover:text-gray-700 pb-4">
           {{ $post->title}}       
        </a>

        <p href="#" class="text-sm pb-8 flex gap-1">
            Bởi <a href="#" class="font-semibold hover:text-gray-800">{{ $post->user->name}}</a>, <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
               {{ $post->getFormattedDate()}}  | {{ $post->human_read_time }}
        </p>
        

        <a href="{{ route('view', $post) }}" class="pb-6">
            {{ $post->shortBody(20)}}
        </a>
        <a href="{{ route('view', $post) }}" class="text-gray-800 hover:text-black">Xem thêm <i class="fas fa-arrow-right"></i></a>

    </div>

</article>