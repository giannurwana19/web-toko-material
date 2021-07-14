@extends('layouts.admin.app')
@section('title', 'Ubah Profile Toko' )

@section('content') <div class="row">
    <div class="col-lg-7">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Ubah Profile Toko</h6>
            </div>
            <div class="card-body">
                @include('layouts.admin.includes.alert')
                <form action="{{ route('profiles.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')

                    <div class="form-group">
                        <label for="name">Nama Toko</label>
                        <input type="text" name="name" value="{{ $profile->name ?? old('name') }}"
                            class="form-control @error('name') is-invalid @enderror" id="name" autofocus>
                        @error('name')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="description">Deskripsi</label>
                        <textarea name="description" id="description"
                            class="form-control @error('description') is-invalid @enderror" cols="30"
                            rows="5">{{ $profile->description ?? old('description') }}</textarea>
                        @error('description')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="image">Gambar</label>
                        <input type="file" name="image" class="form-control @error('image') is-invalid @enderror"
                            id="image">
                        @error('image')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="hari_buka">Hari Buka</label>
                            <select name="hari_buka" id="hari_buka"
                                class="custom-select @error('hari_buka') is-invalid @enderror">
                                <option disabled selected>Pilih Hari Buka</option>
                                @foreach (dayInAWeek() as $day)
                                <option value="{{ $day }}" @if($profile->hari_buka == $day) selected @endif>{{ $day }}
                                </option>
                                @endforeach
                            </select>
                            @error('hari_buka')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group col-md-6">
                            <label for="hari_sampai">Sampai Hari</label>
                            <select name="hari_sampai" id="hari_sampai"
                                class="custom-select @error('hari_sampai') is-invalid @enderror">
                                <option disabled selected>Pilih Sampai Hari</option>
                                @foreach (dayInAWeek() as $day)
                                <option value="{{ $day }}" @if($profile->hari_sampai == $day) selected @endif>{{ $day }}
                                </option>
                                @endforeach
                            </select>
                            @error('hari_sampai')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="jam_buka">Jam Buka</label>
                            <select name="jam_buka" class="custom-select" id="jam_buka">
                                <option disabled selected>Pilih Jam Buka</option>
                                @foreach (timeString() as $time)
                                <option value="{{ $time }}" @if($profile->jam_buka == $time) selected @endif>{{ $time }}
                                </option>
                                @endforeach
                            </select>
                            @error('hari_buka')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group col-md-6">
                            <label for="jam_tutup">Jam Tutup</label>
                            <select name="jam_tutup" class="custom-select" id="jam_tutup">
                                <option disabled selected>Pilih Jam Tutup</option>
                                @foreach (timeString() as $time)
                                <option value="{{ $time }}" @if($profile->jam_tutup == $time) selected
                                    @endif>{{ $time }}
                                </option>
                                @endforeach
                            </select>
                            @error('hari_buka')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <div class="form-group">
                                <label for="whatsapp">Nomor Whatsapp</label>
                                <input type="number" name="whatsapp" value="{{ $profile->whatsapp ?? old('whatsapp') }}"
                                    class="form-control @error('whatsapp') is-invalid @enderror" id="whatsapp">
                                @error('whatsapp')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <div class="form-group">
                                <label for="telephone">Nomor Telepon</label>
                                <input type="number" name="telephone"
                                    value="{{ $profile->telephone ?? old('telephone') }}"
                                    class="form-control @error('telephone') is-invalid @enderror" id="name">
                                @error('telephone')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="message">Pesan Whatsapp otomatis</label>
                        <textarea name="message" id="message"
                            class="form-control @error('message') is-invalid @enderror" cols="30"
                            rows="5">{{ decodeMessage($profile->message) ?? old('message') }}</textarea>
                        @error('message')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-5">
        <img src="{{ asset('storage/images') }}/{{ $profile->image }}" alt="" id="imageElementProfile"
            class="img-fluid">
    </div>
</div>
@endsection

@push('js')
<script>
    const image = document.getElementById('image');
    const imageElementProfile = document.getElementById('imageElementProfile');

    image.addEventListener('change', viewImage);

    function viewImage(e) {
        imageElementProfile.src = URL.createObjectURL(e.target.files[0]);
    }
</script>
@endpush
