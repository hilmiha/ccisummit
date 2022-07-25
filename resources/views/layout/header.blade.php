<div class="col-12">
    <div class="row bg-white py-3 mb-0 mb-lg-4">
        <div class="col-12 col-lg-8">
            <div class="d-flex flex-column flex-lg-row justify-content-between justify-content-lg-start h-100">
                <div class="d-flex flex-row {{ Request::is('beranda') ? 'justify-content-end' : 'justify-content-between' }}  align-items-lg-center">
                    <a href="/beranda" class="me-5 {{ (Request::is('beranda') or Request::is('/')) ? 'd-none' : '' }}"><img src="{{ asset('image/web-asset/logo_summit_simp.png') }}" class="img-fluid logo-header" alt="" style="min-width: 96.14px"></a>
                    <button type="button" class="btn btn-outline-primary d-lg-none" data-bs-toggle="collapse" data-bs-target="#menu"><i class="bi bi-three-dots"></i></button>
                </div>
                <div class="d-lg-block collapse bg-menu-chg mt-4 mt-lg-0 px-2 pt-2 pt-lg-0 rounded-top" id="menu">
                    <div class="d-flex flex-column flex-lg-row justify-content-start align-items-lg-center text-center">
                        
                        <a href="/beranda" class="text-decoration-none me-lg-5 {{ (Request::is('beranda') or Request::is('/') or Request::is('event/*') or Request::is('pesan/*') or Request::is('bayar/*') )  ? 'd-none' : '' }}"><div class="menu-list p-3 p-lg-0"><b>Beranda</b></div></a>
                        <a href="/blog" class="text-decoration-none me-lg-5 {{ (Request::is('masuk') or Request::is('daftar') or Request::is('pesan/*') or Request::is('bayar/*')) ? 'd-none' : '' }} {{ (Request::is('blog')) ? 'nav-link disabled text-secondary text-opacity-75' : '' }}"><div class="menu-list p-3 p-lg-0"><b>Blog & Pengumuman</b></div></a>
                        @if (Auth::check())
                            <a href="/transaksisaya" class="text-decoration-none me-lg-5 {{ (Request::is('masuk') or Request::is('daftar') or Request::is('pesan/*') or Request::is('bayar/*')) ? 'd-none' : '' }} {{ (Request::is('transaksisaya')) ? 'nav-link disabled text-secondary text-opacity-75' : '' }}"><div class="menu-list p-3 p-lg-0"><b>Transaksi Saya</b></div></a>
                            <a href="/tiketsaya" class="text-decoration-none me-lg-5 {{ (Request::is('masuk') or Request::is('daftar') or Request::is('pesan/*') or Request::is('bayar/*')) ? 'd-none' : '' }} {{ (Request::is('tiketsaya')) ? 'nav-link disabled text-secondary text-opacity-75' : '' }}"><div class="menu-list p-3 p-lg-0"><b>Tiket Saya</b></div></a>
                            <a href="/ecert" class="text-decoration-none me-lg-5 {{ (Request::is('masuk') or Request::is('daftar') or Request::is('pesan/*') or Request::is('bayar/*')) ? 'd-none' : '' }} {{ (Request::is('ecert')) ? 'nav-link disabled text-secondary text-opacity-75' : '' }}"><div class="menu-list p-3 p-lg-0"><b>E-Certificate</b></div></a>
                        @endif
                        <a href="#" class="text-decoration-none me-lg-5 {{ (Request::is('masuk') or Request::is('daftar'))  ? '' : 'd-none' }}"><div class="menu-list p-3 p-lg-0"><b>Hubungi Kami</b></div></a>
                        <a href="#" class="text-decoration-none me-lg-5 {{ (Request::is('masuk') or Request::is('daftar'))  ? '' : 'd-none' }}"><div class="menu-list p-3 p-lg-0"><b>FAQ</b></div></a>
                    </div>
                </div> 
            </div>
        </div>
        <div class="col-12 col-lg {{ (Request::is('masuk') or Request::is('daftar')) ? 'd-none' : '' }}">
            @if (!Auth::check())
                <div class="d-flex flex-column flex-lg-row justify-content-end h-100">
                    <div class="d-lg-block collapse bg-menu-chg px-2 px-lg-0 pb-2 pb-lg-0 rounded-bottom" id="menu"> 
                        <div class="d-flex flex-column flex-lg-row justify-content-end align-items-lg-center text-center">
                            <a href="/masuk" class="text-decoration-none ms-lg-5"><div class="menu-list p-3 p-lg-0"><b>Masuk</b></div></a>
                            <a href="/daftar" class="btn btn-outline-primary text-decoration-none ms-lg-5 px-lg-5"><div class="p-2 p-lg-0" ><b>Buat Akun</b></div></a>
                        </div>
                    </div>
                </div>
            @endif
            
            @if (Auth::check())
                <div class="d-flex flex-column flex-lg-row justify-content-end h-100">
                    <div class="d-lg-block collapse bg-menu-chg px-2 px-lg-0 pb-2 pb-lg-0 rounded-bottom" id="menu"> 
                        <div class="d-flex flex-column flex-lg-row justify-content-end align-items-lg-center text-center">
                            <a href="/akunsaya" class="btn btn-outline-primary text-decoration-none px-lg-5"><div class="p-2 p-lg-0" ><b>{{ auth()->user()->nama }}</b></div></a>
                            
                            @can('isadmin')
                                <a href="/dashboard" class="text-decoration-none ms-lg-5"><div class="menu-list p-3 p-lg-0"><b>Admin</b></div></a>
                            @endcan

                            <form action="/keluar" method="POST">
                                @csrf
                                <button class="btn btn-link text-decoration-none ms-lg-5 p-3 p-lg-0 menu-list" type="submit"><b>Logout</b></button>
                            </form>
                        </div>
                    </div>
                </div>
            @endif
    
        </div>
    </div>
</div>
