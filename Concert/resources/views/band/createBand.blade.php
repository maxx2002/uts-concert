@extends('layout.main')

@section('title', 'Concert - Band')

@section('content')
<div class="container">
<h1 class="mt-4 text-blue text-center">Register Band</h1>

<form action="{{ route('bands.store') }}" method="POST" class="mt-4" enctype="multipart/form-data">
    @csrf
    
    <div class="content">
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="band_poster">Band Poster</label>                    
                    <input class="form-control" id="band_poster" type="file" name="band_poster" onchange="previewImage()">
                    <img style="max-height: 291px" class="img-preview img-fluid mt-3" src="" alt="">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="">Band name</label>
                    <input type="text" class="form-control" name="band_name" required>
                </div>
                <div class="form-group">
                    <label for="">Genre</label>
                    <select name="genre" class="form-control" id="">
                        <option value="Dangdut">Dangdut</option>
                        <option value="Pop">Pop</option>
                        <option value="Rock">Rock</option>
                        <option value="Jazz">Jazz</option>
                        <option value="Classic">Classic</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Band Member</label>
                    <input type="text" class="form-control" name="band_member" required>
                </div>
                <div class="form-group">
                    <label for="">Band Price</label>
                    <input type="text" class="form-control" name="band_price" required>
                </div>
                <div class="form-group">
                    <label for="">Band Email</label>
                    <input type="text" class="form-control" name="band_email" required>
                </div>
                <div class="form-group">
                    <label for="">Band Phone</label>
                    <input type="text" class="form-control" name="band_phone" required>
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