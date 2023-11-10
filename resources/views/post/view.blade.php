
<x-app-layout :meta-title="$post->meta_title ?: $post->title" :meta-description="$post->meta_description">
   
    <div class="container mx-auto max-w-screen-xl flex flex-wrap py-6">

            <!-- Post Section -->
            <section class="w-full md:w-2/3 flex flex-col  px-3">
    
                <article class="flex flex-col shadow my-4">
                    <!-- Article Image -->
                      <a href="{{ route('view', $post) }}" class="hover:opacity-75" style="display: block; max-width: 700px; margin: 0 auto; overflow: hidden;">
                          <img src="{{ $post->getThumbnail() }}" alt="Thumbnail" style="aspect-ratio: 4/3; object-fit: contain;">
                      </a>
    
                    <div class="bg-white flex flex-col justify-start p-6">
                       
                        <div class="flex gap-4">

                            @foreach ($post->categories as $category)
            
                                <a href="#" class="text-blue-700 text-sm font-bold uppercase pb-4">
                                    {{ $category->title}}
                                </a>
                
                            @endforeach

                        </div>

                        <h1 class="text-3xl font-bold hover:text-gray-700 pb-4">
                            {{ $post->title}}  
                        </h1>
                        <p href="#" class="text-sm pb-8 flex gap-1">
                            Bởi <a href="#" class="font-semibold hover:text-gray-800">{{ $post->user->name}}</a>, <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                              </svg>
                               {{ $post->getFormattedDate()}}  | {{ $post->human_read_time }}
                        </p>

                        <div>
                            {!! $post->body !!}
                        </div>

                        <br>
                        <livewire:upvote-downvote :post="$post"/>

                    </div>
                </article>
    
                <div class="w-full flex pt-6">

                    <div class="w-1/2">
                  
                        @if ($prev)
                            <a href="{{ route('view', $prev) }}" class="block w-full bg-white shadow hover:shadow-md text-left p-6">

                                <p class="text-lg text-blue-800 font-bold flex items-center">
                                    <i class="fas fa-arrow-left pr-1"></i> 
                                    Bài trước
                                </p>

                                <p class="pt-2">
                                    {{\Illuminate\Support\Str::words( $prev->title, 5) }}
                                </p>

                            </a>
                        @endif

                    </div>

                    <div class="w-1/2">

                        @if ($next)
                        <a href="{{ route('view', $next) }}" class="block w-full bg-white shadow hover:shadow-md text-right p-6">

                            <p class="text-lg text-blue-800 font-bold flex items-center justify-end">
                                Bài kế tiếp
                                <i class="fas fa-arrow-right pl-1"></i>
                            </p>

                            <p class="pt-2">
                                {{\Illuminate\Support\Str::words( $next->title, 5) }}
                            </p>

                        </a>
                        @endif

                    </div>

                </div>
    
            <br>
            <livewire:comments :post="$post"/>

            </section>

           
            <div class=" sticky-anchor w-full md:w-1/3 items-center px-3  sticky-component" style="position: relative; bottom:15px">

                    <h1 class=" playful sm:text-xl  font-bold text-gray-500  pb-1 border-b-2 border-gray-500 mb-3 ">
                      <span aria-hidden="true">C</span>
                      <span aria-hidden="true">ó</span>
                      <span aria-hidden="true" class="ml-3" >t</span>
                      <span aria-hidden="true">h</span>
                      <span aria-hidden="true">ể</span>
                      <span aria-hidden="true" class="ml-3">b</span>
                      <span aria-hidden="true">ạ</span>
                      <span aria-hidden="true">n</span>
                      <span aria-hidden="true" class="ml-3">q</span>
                      <span aria-hidden="true">u</span>
                      <span aria-hidden="true">a</span>
                      <span aria-hidden="true">n</span>
                      <span aria-hidden="true" class="ml-3">t</span>
                      <span aria-hidden="true">â</span>
                      <span aria-hidden="true">m</span>
                    </h1>
        
                        @foreach ($popularPosts as $post)
        
                            <div class="grid grid-cols-4 gap-2 mb-4">
        
                                 <a href="{{route('view', $post)}}" class="pt-1">
        
                                       <img src="{{$post->getThumbnail()}}" alt="{{$post->title}}"/>
        
                                 </a>
        
                                  <div class="col-span-3">
        
                                      <a href="{{route('view', $post)}}">
                                        <h3 class="text-sm  whitespace-nowrap truncate">
                                          {{ $post->title }}
                                        </h3>
                                      </a>
        
                                      <div class="flex gap-4 mb-2">
        
                                        @foreach ($post->categories as $category)
                                        
                                            <a class="bg-blue-500 text-white p-1 rounded text-xs font-bold  ">
                                                {{ $category->title}}
                                            </a>
                            
                                        @endforeach
                            
                                      </div>
        
                                      <div class="text-xs">
                                            {{ $post->shortBody(10) }}
                                      </div>
        
                                      <a href="{{ route('view', $post) }}" class="text-xs text-gray-800 hover:text-black">Xem thêm<i class="fas fa-arrow-right ml-1"></i></a>
        
                                  </div>
        
                            </div>
                            
                        @endforeach 
        
                        {{-- <x-sidebar/> --}}
    
            </div>


            <div class="mb-10" style="position: relative; top:20px"  >
                <h1 class=" playful sm:text-xl  font-bold text-gray-500  pb-1 border-b-2 border-gray-500 mb-3 ">
                  <span aria-hidden="true">Đ</span>
                  <span aria-hidden="true">ề</span>
                  <span aria-hidden="true"  class="ml-3">x</span>
                  <span aria-hidden="true">u</span>
                  <span aria-hidden="true">ấ</span>
                  <span aria-hidden="true">t</span>
                </h1>
          
                <div class="grid grid-cols-1 md:grid-cols-3 gap-3">
          
                    @foreach($randomPosts as $post)
                        <x-post-item :post="$post" :show-author="false"/>
                    @endforeach
          
                </div>
          
            </div>

        </div>
</x-app-layout>





  