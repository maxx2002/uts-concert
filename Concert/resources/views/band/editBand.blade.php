@extends('layout.main')

@section('title', 'Concert - Band')

@section('content')
<div class="container">
<h1 class="mt-4 text-blue text-center">Edit Band</h1>

<form action="{{ route('bands.update', $band->id) }}" method="POST" class="mt-4" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="_method" value="PATCH">
    <div class="content">
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="band_poster">Band Poster</label>
                    <input type="hidden" name="oldImage" value="{{ $band->band_poster }}">
                    <input class="form-control" id="band_poster" type="file" name="band_poster" onchange="previewImage()">
                    <img style="max-height: 291px" class="img-preview img-fluid mt-3" src="{{ asset('storage/'.$band->band_poster) }}" alt="">                    
                </div>
            </div>
            <div class="col">
                <input type="hidden" name="id" value="{{ $band->id }}">
                <div class="form-group">
                    <label for="">Band name</label>
                    <input type="text" class="form-control" name="band_name" value="{{ $band->band_name }}" required>
                </div>
                <div class="form-group">
                    <label for="">Genre</label>
                    <select name="genre" class="form-control" id="">
                        @if ($band->genre == "Dangdut") 
                            <option value="Dangdut" selected>Dangdut</option>
                            <option value="Pop">Pop</option>
                            <option value="Rock">Rock</option>
                            <option value="Jazz">Jazz</option>
                            <option value="Classic">Classic</option>
                        @elseif ($band->genre == "Pop")
                            <option value="Dangdut">Dangdut</option>
                            <option value="Pop" selected>Pop</option>
                            <option value="Rock">Rock</option>
                            <option value="Jazz">Jazz</option>
                            <option value="Classic">Classic</option>
                        @elseif ($band->genre == "Rock")
                            <option value="Dangdut">Dangdut</option>
                            <option value="Pop">Pop</option>
                            <option value="Rock" selected>Rock</option>
                            <option value="Jazz">Jazz</option>
                            <option value="Classic">Classic</option>
                        @elseif ($band->genre == "Jazz")
                            <option value="Dangdut">Dangdut</option>
                            <option value="Pop">Pop</option>
                            <option value="Rock">Rock</option>
                            <option value="Jazz" selected>Jazz</option>
                            <option value="Classic">Classic</option>
                        @elseif ($band->genre == "Classic")
                            <option value="Dangdut">Dangdut</option>
                            <option value="Pop">Pop</option>
                            <option value="Rock">Rock</option>
                            <option value="Jazz">Jazz</option>
                            <option value="Classic" selected>Classic</option>
                        @endif                     
                    </select>
                </div>
                <div class="form-group">
                    <label for="">band_member</label>
                    <input type="text" class="form-control" name="band_member" value="{{ $band->band_member }}" required>
                </div>
                <div class="form-group">
                    <label for="">band_price</label>
                    <input type="text" class="form-control" name="band_price" value="{{ $band->band_price }}" required>
                </div>
                <div class="form-group">
                    <label for="">band_email</label>
                    <input type="text" class="form-control" name="band_email" value="{{ $band->band_email }}" required>
                </div>
                <div class="form-group">
                    <label for="">band_phone</label>
                    <input type="text" class="form-control" name="band_phone" value="{{ $band->band_phone }}" required>
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