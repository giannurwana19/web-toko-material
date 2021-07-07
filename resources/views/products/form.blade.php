<div class="form-group">
    <label for="name">Nama Produk</label>
    <input type="text" name="name" value="{{ $product->name ?? old('name') }}"
        class="form-control @error('name') is-invalid @enderror" id="name" autofocus>
    @error('name')
    <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="form-group">
    <label for="image">Gambar</label>
    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" id="image">
    @error('image')
    <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="form-group">
    <label for="description">Deskripsi</label>
    <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror"
        cols="30" rows="5">{{ $product->description ?? old('description') }}</textarea>
    @error('description')
    <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
<div class="form-row">
    <div class="form-group col-md-6">
        <label for="category_id">Kategori</label>
        <select name="category_id" id="category_id" class="custom-select @error('category_id') is-invalid @enderror">
            <option disabled selected>Pilih Kategori</option>
            @foreach ($categories as $category)
            <option value="{{ $category->id }}" @if($category->id == $product->category_id) selected
                @endif>{{ $category->name }}</option>
            @endforeach
        </select>
        @error('category_id')
        <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="form-group col-md-6">
        <label for="brand_id">Merk</label>
        <select name="brand_id" id="brand_id" class="custom-select @error('brand_id') is-invalid @enderror">
            <option disabled selected>Pilih Merk</option>
            @foreach ($brands as $brand)
            <option value="{{ $brand->id }}" @if($brand->id == $product->brand_id) selected @endif>{{ $brand->name }}
            </option>
            @endforeach
        </select>
        @error('brand_id')
        <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-6">
        <label for="price">Harga</label>
        <input type="number" name="price" value="{{ $product->price ?? old('price') }}"
            class="form-control @error('price') is-invalid @enderror" id="price">
        @error('price')
        <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="form-group col-md-6">
        <label for="stock">Stok</label>
        <input type="number" name="stock" value="{{ $product->price ?? old('price') }}"
            class="form-control @error('stock') is-invalid @enderror" id="stock">
        @error('price')
        <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>
