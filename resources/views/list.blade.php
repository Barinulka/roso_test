@extends('layouts.app')

@section('content')

        @if (count($events) > 0)
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-3" id="catalog-list">
                @foreach ($events as $event)
                    <div class="col">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h4 class="card-text">{{ $event->getName() }} </h4>
                                <p class="card-text">Дата проведения: <small class="text-muted">{{ date('d.m.Y', strtotime($event->date)) }}</small></p>
                                <small class="text-muted">{{ $event->getPeriod() }}</small>
                            </div>
                            <div class="btn-group">
                                <a href="{{ route('event.view', ['event' => $event]) }}" class="btn btn-sm btn-outline-secondary">Смотреть</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <h2 class="text-center">Событий нет</h2>
        @endif
       
@endsection