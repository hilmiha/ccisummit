<div class="container px-0 px-sm-3">
    <div class="row justify-content-between align-items-center p-4">
        <div class="col-12 col-md-6 text-white mb-4 mb-md-0">
            <span class="{{ (Request::is('event/*')) ? 'd-none' : '' }}">Event Baru!</span>
            <h1 class="mt-2 ms-3"><b>Tech Week 2022</b></h1>
            <p class="ms-3">By Central Computer Improvement (CCI), Web Dev. Division</p>
        </div>
        <div class="col-12 col-md-6 d-flex justify-content-end justify-content-md-end">
            <div class="d-flex align-items-center {{ (Request::is('event/*')) ? 'd-none' : '' }}">
                <a href="/event/techweek2022" class="text-white me-5">Lihat Detail</a>
            </div>
            <div class="bg-white rounded">
                <a href="/pesan/techweek2022" class="btn btn-outline-primary px-5"><b>Pesan Tiket</b></a>
            </div>
        </div>
    </div>
</div>