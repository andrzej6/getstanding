<?php

namespace App\Jobs;

use App\Jobs\Job;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Mail;
use Log;

class SendPopupConf extends Job implements ShouldQueue
{
    use InteractsWithQueue, SerializesModels;
    protected $data;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $data = $this->data;
        $email =$data['email'];
        Mail::send('emails.gbs.popup', $data, function ($message) use ($email) {
            $message->from('info@getbritainstanding.org', 'Andrzej');
            $message->to($email);
        });
    }
}
