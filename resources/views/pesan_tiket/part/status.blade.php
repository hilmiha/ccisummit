@if ($onstep=='pembayaran_waiting')
    <div class="row border-start border-4 border-warning bg-warning bg-opacity-10 pt-3 pb-3 mb-3">
        <div class="d-flex justify-content-between mb-3">
            <div>
                <div class="col d-flex align-items-center">
                    <h1 class="bi bi-hourglass-split mb-0 me-2 text-dark"></h1>
                    <span class="text-dark"><b>Sisa Waktu Pembayaran</b></span>
                </div>
            </div>
            <div>
                <div class="col text-end d-flex align-items-center h-100">
                    <span>10 Menit 58 Detik</span>
                </div>
            </div>
            
        </div>
        
        <span class="text-secondary">Lakukan pembayaran sebelum 14/07/2022 23:09  WIB</span>
    </div>
@elseif($onstep=='pembayaran_expired')
    <div class="row border-start border-4 border-danger bg-danger bg-opacity-10 pt-3 pb-3 mb-3">
        <div class="d-flex justify-content-between mb-3">
            <div>
                <div class="col d-flex align-items-center">
                    <h1 class="bi bi-hourglass-bottom mb-0 me-2 text-danger"></h1>
                    <span class="text-danger"><b>Waktu Pembayaran Telah Expired</b></span>
                </div>
            </div>
        </div>
        
        <span class="text-secondary">Lakukan pembayaran sebelum 14/07/2022 23:09  WIB</span>
    </div>
@elseif($onstep=='selesai')
    <div class="row border-start border-4 border-success bg-success bg-opacity-10 pt-3 pb-3 mb-3">
        <div class="d-flex justify-content-between mb-3">
            <div>
                <div class="col d-flex align-items-center">
                    <h1 class="bi bi-check-circle mb-0 me-2 text-success"></h1>
                    <span class="text-success"><b>Pembayaran Berhasil</b></span>
                </div>
            </div>
        </div>
        
        <span class="text-secondary">Terimakasih. Pembayaran kamu telah kami terima</span>
    </div>
@endif





