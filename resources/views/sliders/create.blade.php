@extends('layouts.admin.app')

@section('title', 'Tambah Slider')

@section('content')
<div class="row">
    <div class="col-lg-6">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Tambah Slider</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('sliders.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    @include('sliders.form')

                    <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <img src="" id="image-element" class="img-fluid" alt="">
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
        imageElement.src = URL.createObjectURL(e.target.files[0]);
        btnSubmit.removeAttribute('disabled');
        btnSubmit.style.removeProperty('cursor');
    }
</script>

@endpush
