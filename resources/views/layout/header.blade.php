<div class="row bg-white py-3 mb-0 mb-md-4">
    <div class="col-12 col-md">
        <div class="d-flex flex-column flex-md-row justify-content-between justify-content-md-start h-100">
            <div class="d-flex flex-row justify-content-between align-items-md-center">
                <a href="/beranda"><img src="{{ asset('image/web-asset/logo_summit_simp.png') }}" class="img-fluid logo-header {{ Request::is('beranda') ? 'd-none' : '' }}" alt="" style="min-width: 96.14px"></a>
                <button type="button" class="btn btn-outline-primary d-md-none" data-bs-toggle="collapse" data-bs-target="#menu"><i class="bi bi-three-dots"></i></button>
            </div>
            <div class="d-md-block collapse bg-menu-chg mt-4 mt-md-0 px-2 pt-2 pt-md-0 rounded-top" id="menu">
                <div class="d-flex flex-column flex-md-row justify-content-start align-items-md-center text-center {{ (Request::is('beranda') or Request::is('event/*') or Request::is('pesan/*') or Request::is('bayar/*'))  ? 'd-none' : '' }}">
                    <a href="/beranda" class="text-decoration-none ms-md-5"><div class="menu-list p-3 p-md-0"><b>Beranda</b></div></a>
                    <a href="#" class="text-decoration-none ms-md-5"><div class="menu-list p-3 p-md-0"><b>Hubungi Kami</b></div></a>
                    <a href="#" class="text-decoration-none ms-md-5"><div class="menu-list p-3 p-md-0"><b>FAQ</b></div></a>
                </div>
            </div> 
        </div>
    </div>
    <div class="col-12 col-md {{ (Request::is('masuk') or Request::is('daftar')) ? 'd-none' : '' }}">
        <div class="d-flex flex-column flex-md-row justify-content-end h-100">
            <div class="d-md-block collapse bg-menu-chg px-2 px-md-0 pb-2 pb-md-0 rounded-bottom" id="menu"> 
                <div class="d-flex flex-column flex-md-row justify-content-end align-items-md-center text-center">
                    <a href="/masuk" class="text-decoration-none ms-md-5"><div class="menu-list p-3 p-md-0"><b>Masuk</b></div></a>
                    <a href="/daftar" class="btn btn-outline-primary text-decoration-none ms-md-5 px-lg-5"><div class="p-2 p-md-0" ><b>Buat Akun</b></div></a>
                </div>
            </div>
        </div>
    </div>
</div>