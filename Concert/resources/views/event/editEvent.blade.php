@extends('layout.main')

@section('title', 'Concert - Event')

@section('content')
<div class="container">
<h1 class="mt-4 text-blue text-center">Edit Event</h1>

<form action="{{ route('events.update', $event->id) }}" method="POST" class="my-4" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="_method" value="PATCH">
    <div class="content">
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="event_poster">Event Poster</label>
                    <input type="hidden" name="oldImage" value="{{ $event->event_poster }}">
                    <input class="form-control @error('event_poster') is-invalid @enderror" id="event_poster" type="file" name="event_poster" onchange="previewImage2()">
                    @error('event_poster')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    <img style="max-height: 479px" class="img-preview img-fluid mt-3" src="{{ asset('storage/'.$event->event_poster) }}" alt="">                    
                </div>
            </div>
            <div class="col-6">
                <input type="hidden" name="id" value="{{ $event->id }}">
                <div class="form-group">
                    <label for="">Event name</label>
                    <input type="text" class="form-control" name="event_name" value="{{ $event->event_name }}" required>
                </div>
                <div class="form-group">
                    <label for="">Organizer</label>
                    <input type="text" class="form-control" name="organizer" value="{{ $event->organizer }}" required>
                </div>
                <div class="form-group">
                    <label for="">Band Performance</label>
                    <select name="band_id" id="" class="form-control">
                        @foreach ($bands as $band)
                            @if ($band['id'] == $event['band_id'])
                                <option value="{{ $band['id'] }}" selected>{{ $band['band_name'] }}</option>
                            @else
                                <option value="{{ $band['id'] }}">{{ $band['band_name'] }}</option>
                            @endif
                            
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Date</label>
                    <input type="date" class="form-control" name="date" value="{{ $event->date }}" required>
                </div>
                <div class="form-group">
                    <label for="">Location</label>
                    <input type="text" class="form-control" name="location" value="{{ $event->location }}" required>
                </div>
                <div class="form-group">
                    <label for="">Ticket Price</label>
                    <input type="text" class="form-control" name="ticket_price" value="{{ $event->ticket_price }}" required>
                </div>
                <div class="form-group">
                    <label for="">Event Instagram</label>
                    <input type="text" class="form-control" name="event_instagram" value="{{ $event->event_instagram }}" required>
                </div>
                <div class="form-group">
                    <label for="">Contact Person</label>
                    <input type="text" class="form-control" name="contact_person" value="{{ $event->contact_person }}" required>
                </div>
                <div class="form-group">
                    <label for="">Contact Phone</label>
                    <input type="text" class="form-control" name="contact_phone" value="{{ $event->contact_phone }}" required>
                </div>                
                <div class="form-group mt-3 d-flex justify-content-end">
                    <input type="submit" value="Save" class="btn bg-lightblue text-white">
                </div>
            </div>
        </div>        
    </div>
</form>
</div>

<script src="/js/script.js"></script>
@endsection