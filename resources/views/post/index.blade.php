<x-app-layout meta-title=""> 

  <div class="container max-w-7xl mx-auto flex flex-wrap py-6">
    <!-- Posts Section -->
    <section class="w-full md:w-2/3  px-3">

      <div class="flex  flex-col items-center">
          @foreach ($posts as $post)

              <x-post-item :post="$post"/>

          @endforeach
      </div>

      <br>

       {{ $posts->links() }}

      <br>

    </section>

     <x-sidebar/>
     
    </div>

</x-app-layout>