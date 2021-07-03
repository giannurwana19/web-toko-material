@extends('layouts.admin.app')

@section('title', 'Produk')

@section('content')
<div class="row">
    <div class="col-lg-8">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                    <a href="{{ route('products.create') }}" class="btn btn-primary btn-sm">+ Tambah</a>
                </h6>
            </div>
            <div class="card-body">
                @include('layouts.admin.includes.alert')
                <table class="table table-sm table-bordered table-hover">
                    <thead class="text-center">
                        <tr>
                            <th>No</th>
                            <th>Nama Produk</th>
                            <th>Harga</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($products as $product)
                        <tr>
                            <td class="text-center">{{ $products->firstItem() + $loop->iteration - 1 }}</td>
                            <td>{{ $product->name }}</td>
                            <td>Rp. {{ $product->price_col }}</td>
                            <td class="text-center">
                                <form action="{{ route('products.destroy', $product) }}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <a href="{{ route('products.edit', $product) }}" title="detail"
                                        class="btn btn-secondary btn-sm">
                                        <i class="far fa-eye"></i>
                                    </a>
                                    <a href="{{ route('products.edit', $product) }}" title="ubah"
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
                            <td colspan="3" class="text-center">Produk kosong!</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
                {{ $products->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
