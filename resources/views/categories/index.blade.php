@extends('layouts.admin.app')

@section('title', 'Kategori')

@section('content')
<div class="row">
    <div class="col-lg-8">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                    <a href="{{ route('categories.create') }}" class="btn btn-primary btn-sm">+ Tambah</a>
                </h6>
            </div>
            <div class="card-body">
                <table class="table table-sm table-bordered table-hover">
                    <thead class="text-center">
                        <tr>
                            <th>No</th>
                            <th>Nama Kategori</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($categories as $category)
                        <tr>
                            <td class="text-center">{{ $categories->firstItem() + $loop->iteration - 1 }}</td>
                            <td>{{ $category->name }}</td>
                            <td class="text-center">
                                <form action="{{ route('categories.destroy', $category) }}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <a href="{{ route('categories.edit', $category) }}" title="ubah"
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
                            <td colspan="3" class="text-center">Kategori kosong!</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
                {{ $categories->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
