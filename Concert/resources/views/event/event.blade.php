@extends('layout.main')

@section('title', 'Concert - Event')

@section('content')
<div class="bg-creme">
<div class="container">

    <h1 class="text-center text-blue mt-4">Event</h1>
    <a href="{{ route('events.create') }}">
        <p class="text-lightblue text-center">Create Your Own Event Here</p>
    </a>

    <div class="row d-flex justify-content-center">
        @foreach($events as $event)
        <div class="col-md-3 my-2">
            <div class="cards">
                <div class="card-image">
                    <img src="{{ asset('storage/'.$event['event_poster']) }}" class="card-img-top w-100" alt="...">
                </div>
                <div class="card-heading">
                    {{ $event->event_name }}
                </div>
                <div class="card-text">
                    <div class="row">
                        <div class="col-md-1"><i class="fas fa-map-marker-alt"></i></div>
                        <div class="col">{{ $event['location'] }}</div>
                    </div>                    
                </div>
                <div class="card-text">
                    <div class="row">
                        <div class="col-md-1"><i class="fas fa-table mr-1"></i></div>
                        <div class="col">{{ $event['date'] }}</div>
                    </div>  
                </div>
                <a href="{{ route('events.show', $event->id) }}" class="card-button">Details</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
</div>
@endsection