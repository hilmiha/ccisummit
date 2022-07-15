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
                    <div class="mb-3">
                        <label for="nama" class="form-label tx-summit"><b>Nama Lengkap</b></label>
                        <p>HILMI HIDAYAT ARFISKO</p>
                    </div>
                    <div class="mb-3">
                        <label for="nim" class="form-label tx-summit"><b>No Induk Mahasiswa (NIM)</b></label>
                        <p>1301170142</p>
                    </div>
                    <div class="mb-3">
                        <label for="nohp" class="form-label tx-summit"><b>No Hp</b></label>
                        <p>081349471340</p>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label tx-summit"><b>Alamat Email</b></label>
                        <p>hilmihidayatar@gmail.com</p>
                    </div>
                </div>
            </div>

            <hr class="d-lg-none mb-4">

            <div class="col-12 col-lg-6">
                
                @include('pesan_tiket.part.status')

                <div class="row mb-3">
                    <div class="col-6">
                        <label class="form-label tx-summit"><b>ID Pesanan</b></label>
                    </div>
                    <div class="col-6 text-end">
                        <span>TIX140722TW</span>
                    </div>
                </div>

                <div>
                    <label class="form-label tx-summit"><b>Detail Pesanan</b></label>
                    <div class="mt-2 mb-5 rounded-2">
                        
                        <div class="row mb-4">
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
                    @if ($onstep=='pembayaran_waiting')
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
                    @elseif($onstep=='pembayaran_expired')
                        <button class="btn btn-secondary w-100" disabled >Bayar Sekarang!</button>

                    @elseif($onstep=='selesai')
                        <a href="#" class="btn btn-primary w-100" >Lihat Tiket</a>
                    @endif
                </div>
                
            </div>
        </div>
    </div>
</div>