@extends('layout.main')

@section('title', 'Concert - Event')

@section('content')
<div class="container">    
    
    <div class="my-5">  
        <div class="row">
            <div class="col-5 d-flex justify-content-center">
                <img src="{{ asset('storage/'.$event['event_poster']) }}" alt="" height="500">
            </div>
            <div class="col-7">    
                <h1 class="text-blue mb-3">{{ $event['event_name'] }}</h1>
                
                <div class="row">
                    <div class="col">
                        <div class="card mb-3 bg-lightblue">
                            <div class="row g-0">
                              <div class="col-4 d-flex justify-content-center align-items-center">
                                <i style="font-size: 40px" class="fas fa-map-marker-alt text-white"></i>
                              </div>
                              <div class="col-8">
                                <div class="mt-3">
                                  <h6 class="text-white">Location</h6>
                                  <p class="text-tosca">{{ $event['location'] }}</p>
                                </div>
                              </div>
                            </div>
                        </div> 
                    </div>
                    <div class="col">
                        <div class="card mb-3 bg-lightblue">
                            <div class="row g-0">
                              <div class="col-4 d-flex justify-content-center align-items-center">
                                <i style="font-size: 40px" class="fas fa-table text-white"></i>
                              </div>
                              <div class="col-8">
                                <div class="mt-3">
                                  <h6 class="text-white">Date</h6>
                                  <p class="text-tosca">{{ $event['date'] }}</p>
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
                                  <h6 class="text-white">Ticket Price</h6>
                                  <p class="text-tosca">{{ $event['ticket_price'] }}</p>
                                </div>
                              </div>
                            </div>
                        </div> 
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="card bg-lightblue text-white">
                            <img src="{{ asset('storage/'.$event->bands->band_poster) }}" class="card-img-top" alt="..." style="height: 150px">
                            <div class="card-body">
                              <p>Special Performance By</p>
                              <h5 class="card-title text-tosca"><i class="fas fa-music"></i> {{ $event->bands->band_name }}</h5>                      
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card bg-lightblue">
                            <div class="card-body">
                              <h5 class="card-title text-white mb-2">Contact Person</h5>
                              <h6 class="card-subtitle mb-2 text-tosca"><i class="fab fa-instagram me-1"></i> {{ $event['event_instagram'] }}</h6>
                              <h6 class="card-subtitle mb-2 text-tosca"><i class="fas fa-user me-1"></i> {{ $event['contact_person'] }}</h6>
                              <h6 class="card-subtitle mb-2 text-tosca"><i class="fas fa-phone me-1"></i> {{ $event['contact_phone'] }}</h6>                              
                            </div>
                        </div>
                        <div class="card bg-lightblue mt-2">
                            <h6 class="p-2 text-white text-center">This event is brought to you by {{ $event['organizer'] }}</h6>
                        </div>
                        <div class="card bg-lightblue mt-2">
                            <div class="d-flex align-items-center p-2">
                                <h6 class="text-white ms-2">Action:</h6>
                                <a class="btn bg-blue text-white mx-2" href="{{ route('events.edit', $event->id) }}">Edit</a>
                                <form action="{{ route('events.destroy', $event->id) }}" method="POST">
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

@endsection