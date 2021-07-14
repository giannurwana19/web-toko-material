@extends('layouts.admin.app')

@section('title', 'Profil Toko')

@section('content')
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
