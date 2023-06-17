@extends('layouts.app')

@section('content')

        @if ($event)
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-3" id="catalog-list">
                    <div class="col">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h4 class="card-text">{{ $event->getName() }} </h4>
                                <p class="card-text">Дата проведения: <small class="text-muted">{{ date('d.m.Y', strtotime($event->date)) }}</small></p>
                                <small class="text-muted">{{ $event->getPeriod() }}</small>
                            </div>
                        </div>
                    </div>
            </div>
        @else
            <h2 class="text-center">Событие не найдено</h2>
        @endif
       
@endsection