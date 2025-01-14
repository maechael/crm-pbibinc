<?php

namespace App\Events;

use App\Models\Lead;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class AppointmentTaken
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $lead;
    public $userProfileId;
    public $currentUserId;
    public $appointedBy;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Lead $lead, $userProfileId, $currentUserId, $appointedBy)
    {
        //
        $this->lead = $lead;
        $this->userProfileId = $userProfileId;
        $this->currentUserId = $currentUserId;
        $this->appointedBy = $appointedBy;
    }


    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
