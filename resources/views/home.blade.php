<x-app-layout meta-title=""> 

  <div class="container max-w-6xl mx-auto py-6 ">

     <div class="grid grid-cols-1 md:grid-cols-3 gap-12">

        {{-- Latest Post --}}
          <div class="col-span-2 ">

                <h1 class="playful sm:text-xl  font-bold text-gray-500 pb-1 border-b-2 border-gray-500 mb-3">
                  <span aria-hidden="true">M</span>
                  <span aria-hidden="true">ớ</span>
                  <span aria-hidden="true">i</span>
                  <span aria-hidden="true" class="ml-3">n</span>
                  <span aria-hidden="true">h</span>
                  <span aria-hidden="true">ấ</span>
                  <span aria-hidden="true">t</span>
              </h1>

                <div>

                  <x-post-item :post="$latestPost"/>

                </div>

          </div>

        {{-- Popular 5 Posts (base on like) --}}
          <div  >

            <h1 class=" playful sm:text-xl  font-bold text-gray-500  pb-1 border-b-2 border-gray-500 mb-3 ">
              <span aria-hidden="true">P</span>
              <span aria-hidden="true">h</span>
              <span aria-hidden="true">ổ</span>
              <span aria-hidden="true"  class="ml-3">b</span>
              <span aria-hidden="true">i</span>
              <span aria-hidden="true">ế</span>
              <span aria-hidden="true">n</span>
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

          </div>

     </div>
<br>

    {{-- Recommended post --}}
    @if(isset($recommendedPosts) && count($recommendedPosts) > 0)
    {{-- Recommended post --}}
    <div class="mb-10">
        <h1 class="playful sm:text-xl font-bold text-gray-500 pb-1 border-b-2 border-gray-500 mb-3">
            <span aria-hidden="true">Đ</span>
            <span aria-hidden="true">ề</span>
            <span aria-hidden="true" class="ml-3">x</span>
            <span aria-hidden="true">u</span>
            <span aria-hidden="true">ấ</span>
            <span aria-hidden="true">t</span>
        </h1>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-3">
            @foreach($recommendedPosts as $post)
                <x-post-item :post="$post" :show-author="false"/>
            @endforeach
        </div>
    </div>
    @endif


     {{-- Latest Category --}}
    
     @foreach($categories as $category)
        <div>
            <h3 class="text-lg  sm:text-xl font-bold text-gray-500 pb-1 border-b-2 border-gray-500 mb-3">
            {{$category->title}}

                <a href="{{route('by-category', $category)}}">
                    <i class="fas fa-arrow-right"></i>
                </a>

            </h3>

            <div class="mb-6">

                <div class="grid grid-cols-1 md:grid-cols-3 gap-3">

                    @foreach($category->publishedPosts()->limit(3)->get() as $post)
                        <x-post-item :post="$post" :show-author="false"/>
                    @endforeach

                </div>

            </div>

        </div>

     @endforeach

    </div>


</x-app-layout>