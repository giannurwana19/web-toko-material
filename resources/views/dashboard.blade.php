@extends('layouts.admin.app')

@section('title', 'Dashboard')

@section('content')
<div class="row">

    <!-- card products -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <a href="{{ route('products.index') }}">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Produk</div>
                        </a>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalProduct }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-box-open fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- card categories -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <a href="{{ route('categories.index') }}">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Total Kategori</div>
                        </a>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalCategory }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-list fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- card Brands -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <a href="{{ route('brands.index') }}">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Merk
                            </div>
                        </a>
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $totalBrand }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-bookmark fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- card Slider -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <a href="{{ route('sliders.index') }}">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Total Slider</div>
                        </a>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalSlider }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-images fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-8">
        <div class="card shadow mb-4">
            <div class="card-header d-flex justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Profil Toko</h6>
                <a href="{{ route('profiles.edit') }}" class="btn btn-success btn-sm" title="Edit profile toko"><i
                        class="fas fa-edit"></i></a>
            </div>
            <div class="card-body">
                <h4 class="small font-weight-bold">Nama Toko:</h4>
                <p>{{ $profile->name }}</p>
                <h4 class="small font-weight-bold">Deskripsi Toko:</h4>
                <p>{{ $profile->description }}</p>
                <h4 class="small font-weight-bold">Jam operasional:</h4>
                <p>{{ $profile->hari_buka }} - {{ $profile->hari_sampai }}, {{ $profile->jam_buka }} -
                    {{ $profile->jam_tutup }}</p>
                <h4 class="small font-weight-bold">No Whtatsapp:</h4>
                <p>{{ $profile->whatsapp }}</p>
                <h4 class="small font-weight-bold">Pesan Whatsapp:</h4>
                <p>{{ decodeMessage($profile->message) }}</p>
                <h4 class="small font-weight-bold">No Telepon</h4>
                <p>{{ $profile->telephone }}</p>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card shadow mb-4">
            <div class="card-header">
                <h6 class="m-0 font-weight-bold text-primary">Gambar Toko</h6>
            </div>
            <div class="card-body">
                <img src="{{ asset('storage/images') }}/{{ $profile->image }}" class="img-fluid" id="imgElementProfile"
                    alt="">
            </div>
        </div>
    </div>
</div>
@endsection
