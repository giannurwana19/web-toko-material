@extends('layouts.admin.app')

@section('title', 'Update Produk')

@section('content')
<div class="row">
    <div class="col-lg-7">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Update Produk</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('products.update', $product) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')

                    @include('products.form')

                    <button type="submit" class="btn btn-primary btn-block">Update</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-5">
        <img src="{{ asset('storage/images') }}/{{ $product->image }}" alt="" id="image-element" class="img-fluid">
    </div>
</div>
@endsection


@push('js')
<script>
    const image = document.getElementById('image');
    const imageElement = document.getElementById('image-element')

    image.addEventListener('change', viewImage);

    function viewImage(e) {
        imageElement.src = URL.createObjectURL(e.target.files[0]);
        console.log(e.target.files[0]);
    }
</script>
@endpush
