@php
  use Carbon\Carbon;
@endphp

<div class="flex justify-between mb-4 gap-3">

    <div class="w-12 h-12 flex items-center justify-center rounded-full" style="background-color: rgb(51 65 85);">

        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16" style="color: white">
            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
        </svg>

    </div>

    <div class="flex-1">

        <div>
            <a href="" class="font-semibold text-indigo-800 mr-3">
                {{ $comment->user->name }}
            </a>

            <span class="text-gray-500 text-xs">
                  <i> {{ Carbon::parse($comment->created_at)->locale('vi')->diffForHumans() }}</i>
            </span>
       </div>

        @if($editing)
            <livewire:comment-create :comment-model="$comment"/>
        @else

            <div class="text-gray-700">
                {{$comment->comment}}
            </div>

        @endif

        <div class="flex items-center gap-1 mt-3">

            <a wire:click.prevent="startReply" href="" class="text-gray-600 mr-3 text-sm">
              Phản hồi
            </a> 

            @if (\Illuminate\Support\Facades\Auth::id() == $comment->user_id)

                <a  wire:click.prevent="startCommentEdit" href="" class="text-indigo-600 mr-3 text-sm">
                    Sửa
                </a> 

                <a wire:click.prevent="deleteComment" href="#" class="text-sm text-red-600">
                    Xóa
                </a>

            @endif

      </div>

        @if ($replying)
            <livewire:comment-create :post="$comment->post" :parent-comment="$comment"/>
        @endif

        @if ($comment->comments->count())

            <div class="mt-4">

                @foreach($comment->comments as $childComment)
                    <livewire:comment-item :comment="$childComment" wire:key="comment-{{$childComment->id}}"/>
                @endforeach
                
            </div>

        @endif

    </div>

</div>