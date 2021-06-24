@extends('layouts.admin.app')

@section('title', 'Ubah Merk')

@section('content')
<div class="row">
    <div class="col-lg-6">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Ubah Merk</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('brands.update', $brand) }}" method="POST">
                    @csrf
                    @method('PATCH')

                    @include('brands.form')

                    <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
