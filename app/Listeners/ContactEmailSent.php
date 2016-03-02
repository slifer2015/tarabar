<?php

namespace App\Listeners;

use App\Events\ContactFormSent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class ContactEmailSent
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
     * @param  ContactFormSent  $event
     * @return void
     */
    public function handle(ContactFormSent $event)
    {
        //
        $contact=$event->contact;
        Mail::send('email.contact',['contact'=>$contact],function($msg) use ($contact){
            $msg->from($contact['email'],$contact->name);
            $msg->to('iman4web@gmail.com','Nafis')->subject('contact');
            $msg->replyTo($contact['email'], $contact->name);
        });
    }
}
