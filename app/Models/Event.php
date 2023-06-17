<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'place',
        'period',
        'period_type',
        'date',
    ];

    public function getName() : string
    {
        return $this->title . ' ' . $this->place;
    }

    public function getPeriod() : string
    {
        $result = 'Через 0 дней';

        if ($this->period > 0) {
            $result = "через $this->period $this->period_type";
        } else {
            $period =  -1 * $this->period;
            $result = "было $period $this->period_type назад";
        }

        return $result;
    }

}
