@extends('layout.main')

@section('title', 'Concert - Event')

@section('content')
<div class="container">

<h1 class="mt-4 text-center text-blue">Create Event</h1>

<form action="{{ route('events.store') }}" method="POST" class="my-4" enctype="multipart/form-data">
    @csrf
    
    <div class="content">
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="event_poster">Event Poster</label>                    
                    <input class="form-control @error('event_poster') is-invalid @enderror" id="event_poster" type="file" name="event_poster" onchange="previewImage2()">
                    @error('event_poster')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <img style="max-height: 479px" class="img-preview img-fluid mt-3" src="" alt="">
                </div>                
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="">Event name</label>
                    <input type="text" class="form-control" name="event_name" required value="{{ old('event_name') }}">
                </div>
                <div class="form-group">
                    <label for="">Organizer</label>
                    <input type="text" class="form-control" name="organizer" required value="{{ old('organizer') }}">
                </div>
                <div class="form-group">
                    <label for="">Band</label>
                    <select name="band_id" id="" class="form-control">
                        @foreach ($bands as $band)
                            <option value="{{ $band['id'] }}">{{ $band['band_name'] }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Date</label>
                    <input type="date" class="form-control" name="date" required value="{{ old('date') }}">
                </div>
                <div class="form-group">
                    <label for="">Location</label>
                    <input type="text" class="form-control" name="location" required value="{{ old('location') }}">
                </div>
                <div class="form-group">
                    <label for="">Ticket_price</label>
                    <input type="number" class="form-control" name="ticket_price" required value="{{ old('ticket_price') }}">
                </div>
                <div class="form-group">
                    <label for="">Event Instagram</label>
                    <input type="text" class="form-control" name="event_instagram" required value="{{ old('event_instagram') }}">
                </div>
                <div class="form-group">
                    <label for="">Contact Person</label>
                    <input type="text" class="form-control" name="contact_person" required value="{{ old('contact_person') }}">
                </div>
                <div class="form-group">
                    <label for="">Contact Phone</label>
                    <input type="number" class="form-control" name="contact_phone" required value="{{ old('contact_phone') }}">
                </div>                              
            </div>                 
            <div class="form-group mt-3 d-flex justify-content-end">
                <input type="submit" value="Save" class="btn btn-dark text-center">
            </div>       
        </div>        
    </div>
</form>

</div>

<script src="/js/script.js"></script>
@endsection