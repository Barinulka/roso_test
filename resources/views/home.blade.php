@extends('layouts.app')

@section('content')

    <div class="row row-cols-12 g-3 text-center mx-auto">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-light">Добавить новое событие</h1>
            <p class="lead text-muted">Чтобы создать новое событие или просмотреть список созданных нажниме одну из кнопок ниже.</p>
            <p>
                <a href="{{ route('event.create') }}" class="btn btn-primary my-2">Создать новое событие</a>
                <a href="{{ route('event.list') }}" class="btn btn-secondary my-2">К списку событий</a>
            </p>
        </div>
    </div>

@endsection