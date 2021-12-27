<?php

namespace App\Http\Livewire;

use App\Jobs\NotifyAllVoters;
use App\Mail\IdeaStatusUpdatedMailable;
use App\Models\Comment;
use App\Models\Idea;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use Symfony\Component\HttpFoundation\Response;

class SetStatus extends Component
{
    public $idea;
    public $status;
    public $comment;
    public $notifyAllVoters;

    public function mount(Idea $idea)
    {
        $this->idea = $idea;
        $this->status = $idea->status_id;
    }

    public function setStatus()
    {
        if (!auth()->check() || !auth()->user()->isAdmin()) {
            abort(Response::HTTP_FORBIDDEN);
        }

        $this->idea->status_id = $this->status;
        $this->idea->save();

        if ($this->notifyAllVoters) {
            NotifyAllVoters::dispatch($this->idea);
        }

        Comment::create([
            'user_id' => auth()->id(),
            'idea_id' => $this->idea->id,
            'status_id' => 1,
            'body' => $this->comment ? $this->comment : 'No comment was added!',
            'is_status_update' => true,
        ]);

        $this->reset('comment');

        $this->emit('statusWasUpdated');
    }

    public function render()
    {
        return view('livewire.set-status');
    }
}
