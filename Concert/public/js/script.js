function previewImage() {
    const image = document.querySelector('#band_poster');
    const imgPreview = document.querySelector('.img-preview');
    
    imgPreview.style.display = 'block';

    const reader = new FileReader();
    reader.readAsDataURL(image.files[0]);

    reader.onload = function(event) {
        imgPreview.src = event.target.result;
    }
}  

function previewImage2() {
    const image = document.querySelector('#event_poster');
    const imgPreview = document.querySelector('.img-preview');
    
    imgPreview.style.display = 'block';

    const reader = new FileReader();
    reader.readAsDataURL(image.files[0]);

    reader.onload = function(event) {
        imgPreview.src = event.target.result;
    }
}  