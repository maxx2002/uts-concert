@extends('layout.main')

@section('title', 'Concert - Home')

@section('content')
<h1 class="text-blue text-center mt-4">Concert</h1>
<h5 class="text-center text-lightblue">Let Music Hear Your Soul</h5>
        <div class="container mt-5">
            <div class="row">
                <div class="col">
                    <h3 class="text-center text-blue">Fetured Band</h3>
                    <a href="{{ route('bands.index') }}">
                        <h6 class="text-center text-lightblue">Find Your Favorite Band</h6> 
                    </a>                    
                    <div class="d-flex justify-content-center" style="height: 400px">
                        <lottie-player src="https://assets10.lottiefiles.com/private_files/lf30_xnjjfyjt.json" background="transparent"
                        speed="1" class="" style="width: 400px" loop autoplay></lottie-player>
                    </div>                    
                    <p class="text-center text-lightblue">{{ $count_band }} Bands Available</p>
                                                   
                </div>
                <div class="col">
                    <h3 class="text-center text-blue">Latest Event</h3>
                    <a href="{{ route('events.index') }}">
                        <h6 class="text-center text-lightblue">Check Out Our Coolest Events</h6>   
                    </a>                 
                    <div class="d-flex justify-content-center" style="height: 400px">
                        <lottie-player src="https://assets4.lottiefiles.com/packages/lf20_6aYlBl.json" background="transparent"
                        speed="1" class="" style="width: 400px" loop autoplay></lottie-player>
                    </div>                                          
                    <p class="text-center text-lightblue">{{ $count_event }} Events Available</p>
                        
                </div>
            </div>            
        </div>   
@endsection