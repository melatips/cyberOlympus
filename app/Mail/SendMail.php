<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;
    // protected contact_us = $contactSave;

    public $ourMail;
    public $userName;
    public $topic;
    public $content;
    public $email;
    public $phone;
    /**
     * Create a new content instance.
     *
     * @return void
     */
    // Data yang dilempar dari controller dibaca pada constructor ini
    public function __construct($contactSave)
    {
        // $this->ourMail = 'contact@cyberOlympus.com';
        $this->userName = $contactSave->c_username;
        $this->topic    = $contactSave->topic;
        $this->content  = $contactSave->message;
        $this->email    = $contactSave->c_email;
        $this->phone    = $contactSave->c_phone;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    // Proses mengirimkan email ke tujuan ($contact)
    public function build()
    {
        // dd($this->topic) ;
        // return $this->topic;
        return $this->from('noreply@cyberOlympus.com')
                ->view('email-layout');
                // ->with('username', $this->userName)
                // ->with('topic', $this->topic)
                // ->with('message', $this->email)
                // ->with('phone', $this->phone);
    }
}
