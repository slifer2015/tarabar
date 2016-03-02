<?php

namespace App\Listeners;

use App\Events\OrderFormSent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class OrderEmailSent
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
     * @param  OrderFormSent  $event
     * @return void
     */
    public function handle(OrderFormSent $event)
    {
        //
        $order=$event->order;
        Mail::send('email.order',['order'=>$order],function($msg) use ($order){
            $msg->from($order['email'],$order->name);
            $msg->to('iman4web@gmail.com','Nafis')->subject('Order');
            $msg->replyTo($order['email'], $order->name);
        });
    }
}
