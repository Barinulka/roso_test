<?php

namespace App\Http\Controllers;

use DateTime;
use App\Models\Event;
use App\Helpers\CacheKeys;
use App\Jobs\ProcessEvent;
use App\Helpers\EventHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class EventController extends Controller
{
   
    public function index()
    {
        return view('home');
    }

    public function list()
    {
        $events = Event::all();

        return view('list', compact('events'));
    }

    public function view($eventId)
    {
        $event = Cache::remember(CacheKeys::eventById($eventId), now()->addMinutes(5), function() use ($eventId) {
            return Event::findOrFail($eventId);
        });

        return view('view', compact('event'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        
        $this->validate($request, [
            'title' => 'required|min:5|max:100',
            'place' => 'required',
            'date' => 'required|date',
        ]);

        $event = new Event();
      
        $days = EventHelper::getDiffPeriod($request->date);
        $ratio = EventHelper::getRatio($request->date);
        $period = EventHelper::countPeriod($days, $ratio);
        
        $event->title = $request->title;
        $event->date = $request->date;
        $event->place = $request->place;
        $event->period = $period['period'];
        $event->period_type = $period['type'];
        $event->save();

        // ProcessEvent::dispatch($event);
        Cache::add(CacheKeys::eventById($event->id), $event, now()->addMinutes(5));

        return redirect()->route('home')->with('success', 'Событие успешно создано');
    }
}
