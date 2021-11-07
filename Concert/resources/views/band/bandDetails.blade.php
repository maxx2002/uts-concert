@extends('layout.main')

@section('title', 'Concert - Band')

@section('content')
<div class="container">

<div class="mt-5 mb-3">
    <div class="row">
        <div class="col-5">
            <img src="{{ asset('storage/'.$band['band_poster']) }}" alt="" style="width: 500px">
        </div>
        <div class="col-1"></div>
        <div class="col-6">
            <h1 class="text-blue mb-3">{{ $band['band_name'] }}</h1>
            <div class="row">
                <div class="col">
                    <div class="card mb-3 bg-lightblue">
                        <div class="row g-0">
                          <div class="col-4 d-flex justify-content-center align-items-center">
                            <i style="font-size: 40px" class="fas fa-music text-white"></i>
                          </div>
                          <div class="col-8">
                            <div class="mt-3">
                              <h6 class="text-white">Genre</h6>
                              <p class="text-tosca">{{ $band['genre'] }}</p>
                            </div>
                          </div>
                        </div>
                    </div> 
                </div>
                <div class="col">
                    <div class="card mb-3 bg-lightblue">
                        <div class="row g-0">
                          <div class="col-4 d-flex justify-content-center align-items-center">
                            <i style="font-size: 40px" class="fas fa-users text-white"></i>
                          </div>
                          <div class="col-8">
                            <div class="mt-3">
                              <h6 class="text-white">Members</h6>
                              <p class="text-tosca">{{ $band['band_member'] }} members</p>
                            </div>
                          </div>
                        </div>
                    </div> 
                </div>
                <div class="col">
                    <div class="card mb-3 bg-lightblue">
                        <div class="row g-0">
                          <div class="col-4 d-flex justify-content-center align-items-center">
                            <i style="font-size: 40px" class="fas fa-dollar-sign text-white"></i>
                          </div>
                          <div class="col-8">
                            <div class="mt-3">
                              <h6 class="text-white">Band Price</h6>
                              <p class="text-tosca">{{ $band['band_price'] }}</p>
                            </div>
                          </div>
                        </div>
                    </div> 
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card bg-lightblue">
                        <div class="card-body">
                          <h5 class="card-title text-white mb-2">Contact</h5>
                          <h6 class="card-subtitle mb-2 text-tosca"><i class="far fa-envelope me-1"></i> {{ $band['band_email'] }}</h6>
                          <h6 class="card-subtitle mb-2 text-tosca"><i class="fas fa-phone me-1"></i> {{ $band['band_phone'] }}</h6>                            
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card bg-lightblue">
                        <div class="card-body">
                            <h5 class="card-title text-white mb-3">Action</h5>
                            <div class="d-flex">
                                <a class="btn bg-blue text-white me-2" href="{{ route('bands.edit', $band->id) }}">Edit</a>
                                <form action="{{ route('bands.destroy', $band->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn bg-red text-white" type="submit">Delete</button>
                                </form> 
                            </div>                                                     
                        </div>
                    </div>
                </div>
            </div>     
        </div>
    </div> 
</div>

<h6 class="text-blue">Events with {{ $band['band_name'] }}'s performance</h6>

<div class="row">
    @foreach($band->events as $event)
    <div class="col-2 my-2">
        <div class="cards2">
            <div class="card-image3">
                <img src="{{ asset('storage/'.$event['event_poster']) }}" class="w-100" alt="...">
            </div>            
            <a href="{{ route('events.show', $event->id) }}" class="card-button">{{ $event['event_name'] }}</a>
        </div>
    </div>
    @endforeach
</div>

</div>

@endsection