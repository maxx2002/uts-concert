@extends('layout.main')

@section('title', 'Concert - Band')

@section('content')
<div class="container">
    <h1 class="text-center mt-4 text-blue">Band</h1>
    <a href="{{ route('bands.create') }}">
        <p class="text-lightblue text-center">Register Your Band Here</p>        
    </a>

    <div class="row d-flex justify-content-center">
        @foreach($bands as $band)
        <div class="col-3 my-2">
            <div class="cards2">
                <div class="card-image2">
                    <img src="{{ asset('storage/'.$band['band_poster']) }}" class="w-100" alt="...">
                </div>
                <div class="card-heading">
                    {{ $band['band_name'] }}
                </div>
                <div class="card-text">
                    <div class="row">
                        <div class="col-1"><i class="fas fa-music"></i></div>
                        <div class="col">{{ $band['genre'] }}</div>
                    </div>                    
                </div>
                
                <a href="{{ route('bands.show', $band->id) }}" class="card-button">Details</a>
            </div>
        </div>
    @endforeach
    </div>
</div>

@endsection