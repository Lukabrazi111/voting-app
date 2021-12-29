<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use Illuminate\Notifications\DatabaseNotification;
use Livewire\Component;
use Symfony\Component\HttpFoundation\Response;

class CommentNotifications extends Component
{
    const NOTIFICATION_THRESHOLD = 20;
    public $notifications;
    public $notificationCount;
    public $isLoading;

    protected $listeners = ['getNotifications'];

    public function mount()
    {
        $this->notifications = collect([]);
        $this->isLoading = true;
        $this->getNotificationCount();
    }

    public function getNotificationCount()
    {
        $this->notificationCount = auth()->user()->unreadNotifications()->count();

        if ($this->notificationCount > self::NOTIFICATION_THRESHOLD) {
            $this->notificationCount = self::NOTIFICATION_THRESHOLD . '+';
        }
    }

    public function markAsRead($notificationId)
    {
        if (auth()->guest()) {
            abort(Response::HTTP_FORBIDDEN);
        }

        $notification = DatabaseNotification::findOrFail($notificationId);
        $notification->markAsRead();

        $comment = Comment::find($notification->data['comment_id']);

        session()->flash('scrollToComment', $comment->id);

        return redirect()->route('idea.show', [
            'idea' => $notification->data['idea_slug'],
        ]);
    }

    public function markAllAsRead()
    {
        if (auth()->guest()) {
            abort(Response::HTTP_FORBIDDEN);
        }

        auth()->user()->unreadNotifications()->markAsRead();
        $this->getNotifications();
    }

    public function getNotifications()
    {
        sleep(2);
        $this->notifications = auth()->user()->unreadNotifications->latest()->take(self::NOTIFICATION_THRESHOLD)->get();
        $this->isLoading = false;
    }

    public function render()
    {
        return view('livewire.comment-notifications');
    }
}
