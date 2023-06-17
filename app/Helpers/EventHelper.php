<?php
namespace App\Helpers;

use DateTime;

class EventHelper
{
    public static function getDiffPeriod(string $eventDate): int
    {
        $currentDate = new DateTime(date('d.m.Y'));
        $date = new DateTime($eventDate);

        $interval = date_diff($date, $currentDate);
        
        return (int)$interval->format('%a');
    }

    public static function getRatio(string $eventDate): int
    {
        $currentDate = strtotime(date('d.m.Y'));
        $date = strtotime($eventDate);
        $ratio = 1;
        
        if ($currentDate > $date) {
            $ratio = -1;
        }

        return (int)$ratio;
    }

    public static function countPeriod($days, $ratio): array
    {

        $daysInYear = date('L') ? 366 : 365;
        $daysInMonth = date('t');

        $period = [
            'type' => 'день',
            'period' => 0
        ];

        if ($days >= $daysInYear) {
            $period = [
                'type' => 'год',
                'period' => floor($days / $daysInYear) * $ratio
            ];
        } 

        if ($days < $daysInYear && $days >= $daysInMonth) {
            $period = [
                'type' => 'месяца',
                'period' => floor($days / $daysInMonth) * $ratio
            ]; 
        }

        if ( $days < $daysInMonth) {
            $period = [
                'type' => 'день',
                'period' => $days * $ratio
            ]; 
        }

        return $period;
       
    }
}