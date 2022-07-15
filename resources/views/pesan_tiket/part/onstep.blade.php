{{-- Info Event --}}
<div class="row p-3 p-sm-0 mb-0 mb-sm-4">
    <div class="col-12 d-flex flex-row justify-content-between justify-content-sm-start">
        <div class="me-0 me-sm-5">
            <h6 class="tx-summit mb-2"><b>Form Peserta</b></h6>
            <hr class="devider" style="border-color: #055E9E;">
        </div>
        <div class="me-0 me-sm-5">
            <h6 class="{{ (str_contains($onstep, 'pembayaran_') or $onstep=='selesai') ? 'tx-summit' : 'subtx-summit' }} mb-2"><b>Pembayaran</b></h6>
            <hr class="devider" style="{{ (str_contains($onstep, 'pembayaran_') or $onstep=='selesai') ? 'border-color: #055E9E' : '' }};">
        </div>
        <div class="me-0 me-sm-5">
            <h6 class="{{ ($onstep=='selesai') ? 'tx-summit' : 'subtx-summit' }} mb-2"><b>Selesai</b></h6>
            <hr class="devider" style="{{ ($onstep=='selesai') ? 'border-color: #055E9E' : '' }};">
        </div>
    </div>
</div>