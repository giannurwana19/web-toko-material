@extends('layouts.admin.app')

@section('title', 'Ubah Slider')

@section('content')
<div class="row">
    <div class="col-lg-6">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Ubah Slider</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('sliders.update', $slider) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')

                    @include('sliders.form')

                    <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <img src="{{ $slider->imageCol }}" class="img-fluid" id="image-element" alt="">
    </div>
</div>
@endsection

@push('js')
<script>
    const image = document.getElementById('image');
    const imageElement = document.getElementById('image-element');
    const btnSubmit = document.querySelector('button[type=submit]');

    image.addEventListener('change', viewImage);

    if(image.files.length == 0){
        btnSubmit.setAttribute('disabled', true);
        btnSubmit.style.cursor = 'not-allowed';
    }

    function viewImage(e) {
        console.log(e.target);
        imageElement.src = URL.createObjectURL(e.target.files[0]);
        btnSubmit.removeAttribute('disabled');
        btnSubmit.style.removeProperty('cursor');
    }
</script>
@endpush
