@extends('layout.main')

@section('isi_halaman')
    
    {{-- header --}}
    <div class="fixed-top d-flex justify-content-center">
        <div class="container position-absolute">
            @include('layout.header')
        </div>
    </div>

    {{-- Ecert Saya List --}}
    <div class="container part-summit" style="min-height: 100vh;">

        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8 col-xl-6 border rounded my-5 px-5">
                <div class="row mt-5">
                    <div class="col-12">
                        <h3>Profile Saya</h3>
                        <span class="subtx-summit">Profile kamu sebagai peserta</span>
                    </div>
                    <div class="col-12 p-3 mt-3">
                        <div class="mb-3">
                            <label for="nama" class="form-label tx-summit"><b>Nama Lengkap</b></label>
                            <div class="d-flex justify-content-between">
                                <div>
                                    <span>HILMI HIDAYAT ARFISKO</span>
                                </div>
                                <div>
                                    <button type="button" class="btn btn-link p-0 text-decoration-none"><i class="bi bi-pencil"></i> Ubah</button>
                                </div>
                            </div>
                                
                        </div>
                        <hr class="mb-4">
                        <div class="mb-3">
                            <label for="nim" class="form-label tx-summit"><b>No Induk Mahasiswa (NIM)</b></label>
                            <div class="d-flex justify-content-between">
                                <div>
                                    <span>1301170142</span>
                                </div>
                                <div>
                                    <button type="button" class="btn btn-link p-0 text-decoration-none"><i class="bi bi-pencil"></i> Ubah</button>
                                </div>
                            </div>
                        </div>
                        <hr class="mb-4">
                        <div>
                            <label for="nohp" class="form-label tx-summit"><b>No Hp</b></label> 
                            <div class="d-flex justify-content-between">
                                <div>
                                    <span>081349471340</span>
                                </div>
                                <div>
                                    <button type="button" class="btn btn-link p-0 text-decoration-none"><i class="bi bi-pencil"></i> Ubah</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row my-5">
                    <div class="col-12">
                        <h3>Akun Saya</h3>
                        <span class="subtx-summit">Informasi login yang kamu gunakan</span>
                    </div>
                    <div class="col-12 p-3 mt-3">
                        <div class="mb-3">
                            <label for="email" class="form-label tx-summit"><b>Alamat Email</b></label>
                            <div class="d-flex justify-content-between">
                                <div>
                                    <span>hilmihidayatar@gmail.com</span>
                                </div>
                                <div>
                                    <button type="button" class="btn btn-link p-0 text-decoration-none"><i class="bi bi-pencil"></i> Ubah</button>
                                </div>
                            </div>
                        </div>
                        <hr class="mb-4">
                        <div class="mb-3">
                            <label for="email" class="form-label tx-summit"><b>Password</b></label><br>
                            <span class="subtx-summit">lengkapi form berikut untuk mengganti sandi masuk</span>
                            <form action="">
                                <div class="row mt-3">
                                    <div class="col-12 col-md-6">
                                        <div class="mb-4">
                                            <label for="sandi" class="form-label subtx-summit"><b>Sandi Baru</b></label>
                                            <input type="password" class="form-control" id="sandi" name="sandi" required>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="mb-4">
                                            <label for="sandi" class="form-label subtx-summit"><b>Konfirmasi Sandi Baru</b></label>
                                            <input type="password" class="form-control" id="sandi" name="conf_sandi" required>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="mb-4">
                                            <label for="sandi" class="form-label subtx-summit"><b>Sandi Lama</b></label>
                                            <input type="password" class="form-control" id="sandi" name="conf_sandi" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 text-end text-md-start">
                                        <button type="submit" class="btn btn-primary px-5"><b>Ganti Sandi</b></button>
                                    </div>
                                        
                                </div>
                            </form>
                        </div>
                        <hr class="mb-4">
                        <div class="mb-3">
                            <div>
                                <label for="delete_account" class="form-label tx-summit mb-3"><b>Hapus Akun</b></label><br>
                                <span>Apakah kamu ingin mengapus akun kamu ?</span><br>
                                <span>Kamu memiliki 3 Tiket Event dan 12 E-Certificate. Menghapus akun ini akan menghilangkan semua kontent yang terkait dengan akun ini.</span><br>
                            </div>
                            <div class="mt-2">
                                <span><a href="#" class="text-decoration-none">Hubungi kami</a> untuk info lebih lanjut</span>
                            </div>
                            <div class="mt-4">
                                <a href="#" class="text-danger mt-4"> Ya, Saya ingin hapus akun ini.</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- footer --}}
    @include('layout.footer')
    
@endsection