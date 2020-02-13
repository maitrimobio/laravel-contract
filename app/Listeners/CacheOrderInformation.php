<?php

namespace App\Listeners;

use App\Events\OrderWasPlaced;
use Faker\Factory;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class CacheOrderInformation
{
    /**
     * The Redis factory implementation.
     */
    protected $redis;
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(Factory $redis)
    {
        $this->redis = $redis;
    }

    /**
     * Handle the event.
     *
     * @param  OrderWasPlaced  $event
     * @return void
     */
    public function handle(OrderWasPlaced $event)
    {
        //
    }
}
