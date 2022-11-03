<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PdfMailable extends Mailable
{
    public $subject = "";
    
    public $content;
    public $pdf;

    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($asunto, $content, $pdf)
    {
        $this->subject = $asunto;
        $this->content = $content;
        $this->pdf = $pdf;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.pdf')
                        ->attach($this->pdf->getRealPath(),["as"=> $this->pdf->getClientOriginalName()]);
    }
}
