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
                <div class="row my-5">
                    <div class="col-12">
                        <h3>E-Certificate Saya</h3>
                        <span class="subtx-summit">Berikut e-certificate yang kamu miliki</span>
                    </div>
                    <div class="col-12 border rounded p-3 mt-3 bg-light">
                        <div class="d-flex">
                            <div>
                                <i class="bi bi-info-circle"></i>
                            </div>
                            <div class="ms-3">
                                <span>Sertifikat yang kamu dapatkan bisa digunakan sebagai dokumen memperoleh TAK. Kunjungi instagram <a href="https://www.instagram.com/ditmawa_univtelkom/" class="text-decoration-none">Ditmawa Telkom University</a> untuk info lebih lanjut </span>
                            </div>
                        </div>
                    </div>
                </div>

                @include('ecert_saya.part.list')
                {{-- @include('ecert_saya.part.empty') --}}

            </div>
        </div>
    </div>


    {{-- footer --}}
    @include('layout.footer')
    
@endsection