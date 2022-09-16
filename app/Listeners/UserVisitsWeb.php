<?php

namespace App\Listeners;

use App\Events\NewVisitors;
use App\Models\Visitor;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class UserVisitsWeb
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
     * @param  \App\Events\NewVisitors  $event
     * @return void
     */
    public function handle(NewVisitors $event)
    {
        // 
    }

    public function getIp(){
        foreach (array('HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'REMOTE_ADDR') as $key){
            if (array_key_exists($key, $_SERVER) === true){
                foreach (explode(',', $_SERVER[$key]) as $ip){
                    $ip = trim($ip); // just to be safe
                    if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) !== false){
                        return $ip;
                    }
                }
            }
        }
        return request()->ip(); // it will return server ip when no client ip found
    }

    public function onUserVisit()
    {
        Visitor::create(['visitor_ip' => $this->getIp()]);   
    }

    public function subscribe($event)
    {
        $event->listen(
            NewVisitors::class,
            [UserVisitsWeb::class, 'onUserVisit'],
        );
    }
}
