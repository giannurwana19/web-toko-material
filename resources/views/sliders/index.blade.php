@extends('layouts.admin.app')

@section('title', 'Slider')

@section('content')
<div class="row">
    <div class="col-lg-8">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                    <a href="{{ route('sliders.create') }}" class="btn btn-primary btn-sm">+ Tambah</a>
                </h6>
            </div>
            <div class="card-body">
                @include('layouts.admin.includes.alert')
                <table class="table table-sm table-bordered table-hover">
                    <thead class="text-center">
                        <tr>
                            <th>No</th>
                            <th>Gambar Slider</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($sliders as $slider)
                        <tr>
                            <td class="text-center">{{ $sliders->firstItem() + $loop->iteration - 1 }}</td>
                            <td><img src="{{ $slider->imageCol }}" width="300" alt=""></td>
                            <td class="text-center">
                                <form action="{{ route('sliders.destroy', $slider) }}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <a href="{{ route('sliders.edit', $slider) }}" title="ubah"
                                        class="btn btn-success btn-sm">
                                        <i class="far fa-edit"></i>
                                    </a>
                                    <button type="submit" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Yakin Hapus?')" title="hapus">
                                        <i class="far fa-trash-alt"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="3" class="text-center">Slider kosong!</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
                {{ $sliders->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
