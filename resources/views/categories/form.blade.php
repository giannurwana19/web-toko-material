<div class="form-group">
    <label for="name">Nama kategori</label>
    <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror"
        value="{{ $category->name ?? old('name') }}">
    @error('name')
    <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
