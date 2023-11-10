<div class="mt-6">

    Bình luận
    <livewire:comment-create :post="$post"  />

    <br>
    @foreach($comments as $comment)
         <livewire:comment-item :comment="$comment" wire:key="comment-{{$comment->id}}-{{$comment->comments->count()}}" />
    @endforeach
</div>

