<?php

namespace Modules\Chat\Chatify;

use Illuminate\Support\Facades\Facade;

class ChatifyFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'chatify';
    }
}