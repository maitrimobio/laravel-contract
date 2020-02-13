## Contracts Introduction

Laravel's Contracts are a set of interfaces that define the core services provided by the framework. 
For example, a `Illuminate\Contracts\Queue\Queue` contract defines the methods needed for queueing jobs, 
while the `Illuminate\Contracts\Mail\Mailer` contract defines the methods needed for sending e-mail.

All of the Laravel contracts live in below link.
https://github.com/illuminate/contracts

This provides a quick reference point for all available contracts, as well as a single, decoupled package that may be utilized by package developers.

**Important Points**

While working with Laravel contracts, please note the following important points:
     `1. It is mandatory to define facades in the constructor of a class.
     2. Contracts are explicitly defined in the classes and you need not define the contracts in constructors.`

**Create Repository for Order use Contracts Cache for Order Repo**

    <?php

    namespace App\Orders;
    
    use Illuminate\Contracts\Cache\Repository as Cache;
    
    class Repository
    {
        /**
         * The cache instance.
         */
        protected $cache;
    
        /**
         * Create a new repository instance.
         *
         * @param  Cache  $cache
         * @return void
         */
        public function __construct(Cache $cache)
        {
            $this->cache = $cache;
        }
    }
    
#### How To Use Contracts
So, how do you get an implementation of a contract? It's actually quite simple.

Many types of classes in Laravel are resolved through the service container, including controllers, event listeners, middleware, queued jobs, and even route Closures. So, to get an implementation of a contract, you can just "type-hint" the interface in the constructor of the class being resolved.

For example, take a look at this event listener:

    <?php
    
    namespace App\Listeners;
    
    use App\Events\OrderWasPlaced;
    use App\User;
    use Illuminate\Contracts\Redis\Factory;
    
    class CacheOrderInformation
    {
        /**
         * The Redis factory implementation.
         */
        protected $redis;
    
        /**
         * Create a new event handler instance.
         *
         * @param  Factory  $redis
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

### Contract Reference

    Contract	References Facade
    Illuminate\Contracts\Auth\Access\Authorizable	  
    Illuminate\Contracts\Auth\Access\Gate	Gate
    Illuminate\Contracts\Auth\Authenticatable	  
    Illuminate\Contracts\Auth\CanResetPassword	 
    Illuminate\Contracts\Auth\Factory	Auth
    Illuminate\Contracts\Auth\Guard	Auth::guard()
    Illuminate\Contracts\Auth\PasswordBroker	Password::broker()
    Illuminate\Contracts\Auth\PasswordBrokerFactory	Password
    Illuminate\Contracts\Auth\StatefulGuard	 
    Illuminate\Contracts\Auth\SupportsBasicAuth	 
    Illuminate\Contracts\Auth\UserProvider	 
    Illuminate\Contracts\Bus\Dispatcher	Bus
    Illuminate\Contracts\Bus\QueueingDispatcher	Bus::dispatchToQueue()
    Illuminate\Contracts\Broadcasting\Factory	Broadcast
    Illuminate\Contracts\Broadcasting\Broadcaster	Broadcast::connection()
    Illuminate\Contracts\Broadcasting\ShouldBroadcast	 
    Illuminate\Contracts\Broadcasting\ShouldBroadcastNow	 
    Illuminate\Contracts\Cache\Factory	Cache
    Illuminate\Contracts\Cache\Lock	 
    Illuminate\Contracts\Cache\LockProvider	 
    Illuminate\Contracts\Cache\Repository	Cache::driver()
    Illuminate\Contracts\Cache\Store	 
    Illuminate\Contracts\Config\Repository	Config
    Illuminate\Contracts\Console\Application	 
    Illuminate\Contracts\Console\Kernel	Artisan
    Illuminate\Contracts\Container\Container	App
    Illuminate\Contracts\Cookie\Factory	Cookie
    Illuminate\Contracts\Cookie\QueueingFactory	Cookie::queue()
    Illuminate\Contracts\Database\ModelIdentifier	 
    Illuminate\Contracts\Debug\ExceptionHandler	 
    Illuminate\Contracts\Encryption\Encrypter	Crypt
    Illuminate\Contracts\Events\Dispatcher	Event
    Illuminate\Contracts\Filesystem\Cloud	Storage::cloud()
    Illuminate\Contracts\Filesystem\Factory	Storage
    Illuminate\Contracts\Filesystem\Filesystem	Storage::disk()
    Illuminate\Contracts\Foundation\Application	App
    Illuminate\Contracts\Hashing\Hasher	Hash
    Illuminate\Contracts\Http\Kernel	 
    Illuminate\Contracts\Mail\MailQueue	Mail::queue()
    Illuminate\Contracts\Mail\Mailable	 
    Illuminate\Contracts\Mail\Mailer	Mail
    Illuminate\Contracts\Notifications\Dispatcher	Notification
    Illuminate\Contracts\Notifications\Factory	Notification
    Illuminate\Contracts\Pagination\LengthAwarePaginator	 
    Illuminate\Contracts\Pagination\Paginator	 
    Illuminate\Contracts\Pipeline\Hub	 
    Illuminate\Contracts\Pipeline\Pipeline	 
    Illuminate\Contracts\Queue\EntityResolver	 
    Illuminate\Contracts\Queue\Factory	Queue
    Illuminate\Contracts\Queue\Job	 
    Illuminate\Contracts\Queue\Monitor	Queue
    Illuminate\Contracts\Queue\Queue	Queue::connection()
    Illuminate\Contracts\Queue\QueueableCollection	 
    Illuminate\Contracts\Queue\QueueableEntity	 
    Illuminate\Contracts\Queue\ShouldQueue	 
    Illuminate\Contracts\Redis\Factory	Redis
    Illuminate\Contracts\Routing\BindingRegistrar	Route
    Illuminate\Contracts\Routing\Registrar	Route
    Illuminate\Contracts\Routing\ResponseFactory	Response
    Illuminate\Contracts\Routing\UrlGenerator	URL
    Illuminate\Contracts\Routing\UrlRoutable	 
    Illuminate\Contracts\Session\Session	Session::driver()
    Illuminate\Contracts\Support\Arrayable	 
    Illuminate\Contracts\Support\Htmlable	 
    Illuminate\Contracts\Support\Jsonable	 
    Illuminate\Contracts\Support\MessageBag	 
    Illuminate\Contracts\Support\MessageProvider	 
    Illuminate\Contracts\Support\Renderable	 
    Illuminate\Contracts\Support\Responsable	 
    Illuminate\Contracts\Translation\Loader	 
    Illuminate\Contracts\Translation\Translator	Lang
    Illuminate\Contracts\Validation\Factory	Validator
    Illuminate\Contracts\Validation\ImplicitRule	 
    Illuminate\Contracts\Validation\Rule	 
    Illuminate\Contracts\Validation\ValidatesWhenResolved	 
    Illuminate\Contracts\Validation\Validator	Validator::make()
    Illuminate\Contracts\View\Engine	 
    Illuminate\Contracts\View\Factory	View
    Illuminate\Contracts\View\View	View::make()
