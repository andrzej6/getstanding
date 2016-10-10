<?php

namespace App\Jobs;

use App\Jobs\Job;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

use App\Gbs_reg;
use Mail;

class UsaSend2Emails extends Job implements ShouldQueue
{
    use InteractsWithQueue, SerializesModels;
    protected $tosend;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Gbs_reg $tosend)
    {
        $this->tosend = $tosend;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $tosend = $this->tosend;

        Mail::send('emails.gusa.gusa_reg', array(),function ($message) use ($tosend) {
            $message->from('info@activeworking.com', 'Active Working');
            $message->to($tosend->email);
            $message->subject('Thank you for your GET AMERICA STANDING enquiry');
        });


        $array = $tosend->toArray();

        Mail::send('emails.gusa.gusa_reg_notify', $array, function ($message) use ($tosend){
            $message->from('info@activeworking.com', 'Active Working');
            $message->to('web@activeworking.com');
            $message->subject('GetAmericaStanding.Com. Details from enquiry form');
        });
    }
}