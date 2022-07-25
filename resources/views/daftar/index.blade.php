@extends('layout.main')

@section('isi_halaman')
    <div class="container" style="min-height: 100vh;">

        {{-- header --}}
        <div class="row mt-4 mt-md-5 ">
            @include('layout.header')
        </div>

        {{-- page --}}
        <div class="row">
            <div class="col-12 mt-5 order-0">
                <h2 class="tx-summit mb-3"><b>Buat Akun</b></h2>
                <span>Mulaikan langkah pertama mu dalam event CCI Summit 2022 </span>
            </div>
            <div class="col-lg-8 mt-4 mt-sm-5  mb-4 order-lg-1">
                <form action="/daftar" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-lg-3 me-lg-3" style="min-width: 300px;">
                            <div class="mb-4">
                                <label for="nama" class="form-label tx-summit"><b>Nama Lengkap</b></label>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" required value="{{ old('nama') }}">
                                @error('nama')
                                    <div class="invalid-feedback text-start mb-3">
                                        {{ $message }}
                                    </div>  
                                @enderror
                            </div>
                            
                            
                        </div>
                        <div class="col-lg-3 me-lg-3" style="min-width: 300px;">
                            <div class="mb-4">
                                <label for="nim" class="form-label tx-summit"><b>No Induk Mahasiswa (NIK)</b></label>
                                <input type="text" class="form-control @error('nim') is-invalid @enderror" id="nim" name="nim" pattern="[0-9]{10}" required value="{{ old('nim') }}">
                                @error('nim')
                                    <div class="invalid-feedback text-start mb-3">
                                        {{ $message }}
                                    </div>  
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 me-lg-3" style="min-width: 300px;">
                            <div class="mb-4">
                                <label for="nohp" class="form-label tx-summit"><b>No Hp</b></label>
                                <input type="tel" class="form-control @error('nohp') is-invalid @enderror" id="nohp" name="nohp" pattern="^(\+62|62|0)8[1-9][0-9]{6,9}$" required value="{{ old('nohp') }}">
                                @error('nohp')
                                    <div class="invalid-feedback text-start mb-3">
                                        {{ $message }}
                                    </div>  
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-3 me-lg-3" style="min-width: 300px;">
                            <div class="mb-4">
                                <label for="email" class="form-label tx-summit"><b>Alamat Email</b></label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" required value="{{ old('email') }}">
                                @error('email')
                                    <div class="invalid-feedback text-start mb-3">
                                        {{ $message }}
                                    </div>  
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-lg-3 me-lg-3" style="min-width: 300px;">
                            <div class="mb-4">
                                <label for="sandi" class="form-label tx-summit"><b>Sandi</b></label>
                                <input type="password" class="form-control @error('sandi') is-invalid @enderror" id="sandi" name="sandi" required>
                                @error('sandi')
                                    <div class="invalid-feedback text-start mb-3">
                                        {{ $message }}
                                    </div>  
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-3 me-lg-3" style="min-width: 300px;">
                            <div class="mb-4">
                                <label for="sandi" class="form-label tx-summit"><b>Konfirmasi Sandi</b></label>
                                <input type="password" class="form-control @error('sandi') is-invalid @enderror" id="sandi" name="sandi_confirmation" required>
                                @error('sandi')
                                    <div class="invalid-feedback text-start mb-3">
                                        {{ $message }}
                                    </div>  
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-12" style="min-width: 300px;">
                            <div class="mb-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="term" required>
                                    <label class="form-check-label" for="term">
                                        Dengan mencentang ini, kamu menyetujui <a href="#" class="text-decoration-none"> Syarat & Ketentuan</a> kami.
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-lg-3 me-lg-3" style="min-width: 300px;">
                            <div class="mb-4 text-center text-lg-start">
                                <button type="submit" class="btn btn-primary w-50"><b>Buat Akun</b></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            
            <div class="col-lg mb-4 mb-sm-5 px-5 px-md-0 mt-5 mt-lg-0 order-lg-2">
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <img src="{{ asset('image/web-asset/login_decor_1.png') }}" class="img-fluid w-50" alt="">
                    <h2 class="tx-summit mt-5"><b>Sudah punya akun?</b></h2>
                    <a href="/masuk" class="btn btn-outline-primary text-decoration-none w-50 mt-3"><b>Masuk</b></a>
                </div>
                
            </div>
            
        </div>
    </div>

    {{-- footer --}}
    @include('layout.footer')
    
@endsection