@extends('app')
@section('title', 'edit')
@section('context')
<!-- Edit -->
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data</div>
                <div class="card-body">
                    <form action="{{ route('updateBaru', ['$id'=>$data->id]) }}" method="POST"
                        enctype="multipart/form-data">
                        <input name="_method" type="hidden" value="PUT">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" value="{{$data->nama}}"
                                class="form-control @error('nama') is-invalid @enderror" id="nama"
                                aria-describedby="namaHelp" maxlength="20">
                            <small id="namaHelp" class="form-text text-muted">
                                nama harus diisi dengan maksimal 20 karakter.
                            </small>
                            @error('nama')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" name="username" value="{{$data->username}}"
                                class="form-control @error('username') is-invalid @enderror"" id=" username"
                                aria-describedby="usernameHelp" maxlength="20">
                            <small id="usernameHelp" class="form-text text-muted">
                                username harus diisi kombinasi huruf dan angka dengan maksimal 20 karakter.
                            </small>
                            @error('username')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" placeholder="password@95!"
                                value="{{ $data->password }}" aria-describedby="passwordHelp" maxlength="30"
                                class="form-control @error('password') is-invalid @enderror"" id=" password">
                            <small id="passwordHelp" class="form-text text-muted">
                                Password harus diisi kombinasi huruf, angka dan symbol '@$/!?' dengan maksimal 30
                                karakter.
                            </small>
                            @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="tanggal_lahir">Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir" value="{{$data->tanggal_lahir}}"
                                class="form-control @error('tanggal_lahir') is-invalid @enderror"" id=" tanggal_lahir">
                            @error('tanggal_lahir')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label> <small> (optional) </small>
                            <textarea rows="3" name="alamat" placeholder="Alamat diisi sampai Desa atau Kelurahan"
                                class="form-control @error('alamat') is-invalid @enderror"" id=" alamat"
                                value="{{$data->alamat}}"> </textarea>
                            @error('alamat')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="kecamatan">Kecamatan</label>
                            <input type="text" name="kecamatan"
                                class="form-control @error('kecamatan') is-invalid @enderror"" id=" kecamatan"
                                value="{{$data->kecamatan}}">
                            @error('kecamatan')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="telephone">Telephone</label>
                            <input type="number" name="telephone" minlength="9" maxlength="14"
                                class="form-control @error('telephone') is-invalid @enderror"" id=" telephone"
                                value="{{$data->telephone}}">
                            <small class="form-text text-muted">
                                Telephone harus 9 sampai 14 karakter.
                            </small>
                            @error('telephone')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" value="{{$data->email}}" maxlength="100"
                                class="form-control @error('email') is-invalid @enderror"" id=" email">
                            @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <label for="foto">Ubah Foto</label> <br>
                        <input type="file" class="@error('foto') is-invalid @enderror"" name=" foto"
                            value="{{$data->foto }}">
                        <small class="form-text text-muted">
                            Maksimal 2MB dengan dimensi 1920*720 dan extension .Jpeg
                        </small>
                        @error('foto')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <br>
                        <br>
                        <button type="submit" class="btn btn-primary">submit</button>

                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
