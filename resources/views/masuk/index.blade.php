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
                <h2 class="tx-summit mb-3"><b>Masuk</b></h2>
                <span>Selamat datang kembali! Masuk untuk memulai langkah mu</span>
            </div>
            <div class="col-lg-6 px-5 px-lg-0 mt-5 mt-lg-0 order-lg-2">
                <img src="{{ asset('image/web-asset/login_decor_0.png') }}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 mt-4 mt-sm-5 mb-4 order-lg-1">
                <form action="">
                    <div class="row mb-5">
                        <div class="col-lg-3 me-md-5" style="min-width: 300px;">
                            <div class="mb-4">
                                <label for="email" class="form-label tx-summit"><b>Alamat Email</b></label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-2">
                                <label for="sandi" class="form-label tx-summit"><b>Sandi</b></label>
                                <input type="password" class="form-control" id="sandi" name="sandi" required>
                            </div>
                            <div class="mb-4 w-100 text-end">
                                <a href="#" class="text-decoration-none">Lupa sandi?</a>
                            </div>
                            <div class="mb-4 text-center text-lg-start">
                                <button type="submit" class="btn btn-primary w-50"><b>Masuk</b></button>
                            </div>
                        </div>
                    </div>
                </form>
                <span><b>Belum memiliki akun? </b></span><a href="/daftar" class="text-decoration-none"><b>Buat Akun</b></a>
            </div>
            
        </div>
    </div>

    {{-- footer --}}
    @include('layout.footer')
    
@endsection