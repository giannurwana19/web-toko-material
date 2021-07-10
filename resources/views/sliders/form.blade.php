<div class="form-group">
    <label for="image">Upload gambar slider</label>
    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" id="image">
    @error('image')
    <small class="text-danger">{{ $message }}</small>
    @enderror
</div>
