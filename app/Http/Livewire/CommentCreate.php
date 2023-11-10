<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use App\Models\Post;
use Livewire\Component;

class CommentCreate extends Component
{

    public string $comment = '';

    public Post $post;

    public ?Comment $commentModel = null;

    public ?Comment $parentComment = null;

    public function mount(Post $post, $commentModel = null,  $parentComment = null)
    {
        $this->post = $post;
        $this->commentModel = $commentModel;
        $this->comment = $commentModel ? $commentModel->comment : '';

        $this->parentComment = $parentComment;
    }

    public function render()
    {
        return view('livewire.comment-create');
    }

    public function createComment()
    {
        $user = auth()->user();

        if (!$user) {

            return $this->redirect('/login');
        }

        if (!$user->hasVerifiedEmail()) {
            // Đã đăng nhập, nhưng chưa xác thực email, chuyển hướng đến trang xác thực email
            return $this->redirect(route('verification.notice'));
        }

        if ($this->commentModel) {

            $this->commentModel->comment = $this->comment;

            $this->commentModel->save();

            $this->comment = '';

            $this->emitUp('commentUpdated');
        } else {

            $comment = Comment::create([

                'comment' => $this->comment,
                'post_id' =>  $this->post->id,
                'user_id' => $user->id,
                'parent_id' => $this->parentComment?->id

            ]);

            $this->emitUp('commentCreated', $comment->id);
            $this->comment = '';
        }
    }
}