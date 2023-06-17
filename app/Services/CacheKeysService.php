<?php 
namespace App\Services;

class CacheKeysService 
{
    public static function eventById(int $eventId) : string
    {
        return 'event_' . $eventId;
    }
}