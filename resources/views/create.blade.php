@extends('layouts.app')

@section('content')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Добавление события</h1>
    </div>

        <form class="d-flex flex-wrap flex-column w-100 justify-content-center " action="{{ route('event.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="py-2">
                <label for="title" class="form-label">Название мероприятия</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" value="{{ old('title') }}">
                
                @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="py-2">
                <label for="place" class="form-label">Место проведения мероприятия</label>
                <input type="text" class="form-control @error('place') is-invalid @enderror" name="place" id="place" value="{{ old('place') }}">
                
                @error('place')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="py-2">
                <label for="date" class="form-label">Дата проведения мероприятия</label>
                <input type="date" class="form-control @error('date') is-invalid @enderror" name="date" id="date" value="{{ old('date') }}">
                
                @error('date')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            
            <div class="py-1">
                <button type="submit" class="btn btn-primary">Сохранить</button>
            </div>
        </form>

@endsection