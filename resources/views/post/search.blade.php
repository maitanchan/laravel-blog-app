<x-app-layout>
  <div class="container max-w-7xl mx-auto flex flex-wrap py-6">

      <!-- Posts Section -->
      <section class="w-full md:w-2/3  px-3">

          <div class=" flex flex-col mb-5">


            @if($posts->count() > 0)
            @foreach($posts as $post)
                <div>
                    <a href="{{ route('view', $post) }}">
                        <a href="{{ route('view', $post) }}" class="hover:opacity-75" style="display: block; max-width: 300px;  auto; overflow: hidden;">
                            <img src="{{ $post->getThumbnail() }}" alt="Thumbnail" style="aspect-ratio: 4/3; object-fit: contain;m">
                        </a>
                        <h3 class="text-gray-500 font-bold text-lg sm:text-xl mb-2">
                            {!! str_replace(request()->get('q'), '<span class="bg-yellow-300">' . request()->get('q') . '</span>', $post->title) !!}
                        </h3>
                    </a>
                    <div>
                        {{ $post->shortBody('30') }}
                    </div>
                </div>
                <hr class="my-4">
            @endforeach
        @else
            <div class="text-gray-500 text-lg sm:text-xl mb-2">
                Không tìm thấy dữ liệu theo từ khóa "<span class="bg-yellow-300">{{ request()->get('q') }}</span>".
            </div>
        @endif
        

          </div>

          {{ $posts->appends(['q' => request()->get('q')])->links() }}

      </section>

      <!-- Sidebar Section -->
      <x-sidebar/>

  </div>
</x-app-layout>