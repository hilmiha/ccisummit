<div class="row p-3 p-sm-0 mb-0 mb-sm-4">
    <a href="/event/techweek2022" class="text-decoration-none mt-5 mb-5"><h6><i class="bi bi-arrow-left"></i> Kembali</h6></a>
</div>

{{-- Info Event --}}
<div class="row p-3 p-sm-0 mb-0 mb-sm-4">
    <div class="col-12 d-flex flex-row justify-content-between justify-content-sm-start">
        <div class="me-0 me-sm-5">
            <h6 class="tx-summit mb-2"><b>Form Peserta</b></h6>
            <hr class="devider" style="border-color: #055E9E;">
        </div>
        <div class="me-0 me-sm-5">
            <h6 class="tx-summit mb-2"><b>Pembayaran</b></h6>
            <hr class="devider" style="border-color: #055E9E;">
        </div>
        <div class="me-0 me-sm-5">
            <h6 class="subtx-summit mb-2"><b>Selesai</b></h6>
            <hr class="devider">
        </div>
    </div>
</div>

{{-- Form Pesanan --}}
<div class="row justify-content-between p-3 p-sm-0 ">
    <div class="col-12 col-md-4">
        <div  class="mb-5">
            <img src="{{ asset('image/techweek/summit_event_techweek_sm.png') }}" class="img-fluid" alt="">
        </div>
        <div class="mb-4">
            <h4 class="tx-cciblue"><b>Tech Week<span class="text-primary"> 2022</span></b></h4>
            <span class="subtx-summit">By Central Computer Improvement (CCI), Web Development Division</span>
        </div>
        <div> 
            <p class="mb-5">Workshop membuat web site dengan HTML, CSS, Java Script dan Framework React JS</p>
            <span class="mt-5"><b>Februari 19</b></span>
            <p>Ruang P401, Gedung Deli,  Fakultas Teknik Elektro, Telkom University</p>
           
        </div>
    </div>

    <div class="col-12 col-md-7">
        <div class="row justify-content-between">
            <div class="col-12 col-lg-5 pt-5 pt-sm-0">
                <div class="row">
                    <div class="mb-4">
                        <label for="nama" class="form-label tx-summit"><b>Nama Lengkap</b></label>
                        <p>HILMI HIDAYAT ARFISKO</p>
                    </div>
                    <div class="mb-4">
                        <label for="nim" class="form-label tx-summit"><b>No Induk Mahasiswa (NIM)</b></label>
                        <p>1301170142</p>
                    </div>
                    <div class="mb-4">
                        <label for="nohp" class="form-label tx-summit"><b>No Hp</b></label>
                        <p>081349471340</p>
                    </div>
                    <div class="mb-4">
                        <label for="email" class="form-label tx-summit"><b>Alamat Email</b></label>
                        <p>hilmihidayatar@gmail.com</p>
                    </div>
                </div>
            </div>

            <hr class="d-lg-none mb-4">

            <div class="col-12 col-lg-6 d-flex flex-column justify-content-start">
                <div class="row mb-3">
                    <div class="col-6">
                        <label class="form-label tx-summit"><b>ID Pesanan</b></label>
                    </div>
                    <div class="col-6 pe-0 text-end">
                        <span>TIX140722TW</span>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-6">
                        <label class="form-label tx-summit"><b>Sisa Waktu Pembayaran</b></label>
                    </div>
                    <div class="col-6 pe-0 text-end">
                        <span>10 Menit 58 Detik</span>
                    </div>
                    <p class="subtx-summit">Lakukan pembayaran sebelum 14/07/2022 23:09  WIB</p>
                </div>
                <div>
                    <label class="form-label tx-summit"><b>Detai Pesanan</b></label>
                    <div class="mt-2 mb-5 rounded-2">
                        
                        <div class="row mb-5">
                            <div class="col-7">
                                <span><i>Tiket - Tech Week 2022 </i></span>
                            </div>
                            <div class="col">
                                <span>x 1</span>
                            </div>
                            <div class="col-3 text-end">
                                <span>Rp25.000</span>
                            </div>
                        </div>
                        
                        <hr>

                        
                        <div class="d-flex justify-content-between">
                            <label class="form-label"><b>Total Pesanan</b></label>
                            <span class="text-primary"><b>Rp25.000</b></span>
                        </div>
                        <div class="d-flex justify-content-end">
                            <span class="subtx-summit"><b>No Refund</b></span>
                        </div>
                        
                        
                    </div>
                    <div>
                        <div class="mb-4 text-center text-lg-start">
                            {{-- <button type="submit" class="btn btn-primary w-100"><b>Pesan Tiket</b></button> --}}
                            {{-- <a href="/bayar" class="btn btn-primary w-100"><b>Bayar Tiket</b></a> --}}
                            <button id="pay-button" class="btn btn-primary w-100">Bayar Sekarang!</button>

                            <script type="text/javascript">
                                // For example trigger on button clicked, or any time you need
                                var payButton = document.getElementById('pay-button');
                                payButton.addEventListener('click', function () {
                                    // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
                                    window.snap.pay('{{ $snap_token }}');
                                    // customer will be redirected after completing payment pop-up
                                });
                            </script>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>