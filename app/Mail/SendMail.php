<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;
    protected $data;
    protected $toView;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data,$view)
    {
        $this->data = $data;
        $this->toView = $view;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view($this->toView)->with('data', $this->data);
    }

}
