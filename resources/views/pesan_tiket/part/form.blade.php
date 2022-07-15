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
        <form action="">
            <div class="row justify-content-between">
                <div class="col-12 col-lg-5 pt-5 pt-sm-0">
                    <div class="row">
                        <div class="mb-4">
                            <label for="nama" class="form-label tx-summit"><b>Nama Lengkap</b></label>
                            <input type="text" class="form-control" id="nama" name="nama" required>
                        </div>
                        <div class="mb-4">
                            <label for="nim" class="form-label tx-summit"><b>No Induk Mahasiswa (NIM)</b></label>
                            <input type="text" class="form-control" id="nim" name="nim" pattern="[0-9]{10}" required>
                        </div>
                        <div class="mb-4">
                            <label for="nohp" class="form-label tx-summit"><b>No Hp</b></label>
                            <input type="tel" class="form-control" id="nohp" name="nohp" pattern="^(\+62|62|0)8[1-9][0-9]{6,9}$" required>
                        </div>
                        <div class="mb-4">
                            <label for="email" class="form-label tx-summit"><b>Alamat Email</b></label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6 d-flex flex-column justify-content-between">
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
                        <div class="mb-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="input_true" required>
                                <label class="form-check-label" for="input_true">
                                    Data peserta yang saya isikan sudah benar.
                                </label>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="term" required>
                                <label class="form-check-label" for="term">
                                    Dengan mencentang ini, kamu menyetujui <a href="#" class="text-decoration-none"> Syarat & Ketentuan</a> kami.
                                </label>
                            </div>
                        </div>
                        <div class="mb-4 text-center text-lg-start">
                            {{-- <button type="submit" class="btn btn-primary w-100"><b>Pesan Tiket</b></button> --}}
                            <a href="/bayar/techweek2022" class="btn btn-primary w-100"><b>Pesan Tiket</b></a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    
</div>