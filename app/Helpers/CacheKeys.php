<?php 
namespace App\Helpers;

class CacheKeys 
{
    public static function eventById(int $eventId) : string
    {
        return 'event_' . $eventId;
    }
}