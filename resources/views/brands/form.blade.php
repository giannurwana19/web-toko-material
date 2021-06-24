<div class="form-group">
    <label for="name">Nama Merk</label>
    <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror"
        value="{{ $brand->name ?? old('name') }}" autofocus>
    @error('name')
    <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
