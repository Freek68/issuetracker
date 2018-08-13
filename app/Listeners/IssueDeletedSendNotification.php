<?php

namespace App\Listeners;

use App\Events\IssueDeleted;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class IssueDeletedSendNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  IssueDeleted  $event
     * @return void
     */
    public function handle(IssueDeleted $event)
    {
        //
        session()->flash('success', 'Issue deleted');
    }
}
