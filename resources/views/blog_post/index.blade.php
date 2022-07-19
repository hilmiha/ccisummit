@extends('layout.main')

@section('isi_halaman')
    
    {{-- header --}}
    <div class="fixed-top d-flex justify-content-center">
        <div class="container position-absolute">
            @include('layout.header')
        </div>
    </div>

    
    <div class="container part-summit" style="min-height: 100vh;">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-6 my-5 px-5">
                <div class="row mb-5">
                    <div class="col-12">
                        <div class="mb-4">
                            <a href="/blog" class="text-decoration-none">Blog</a> <span> <i class="bi bi-chevron-double-right"></i> </span> <a href="#" class="text-decoration-none">Events</a> <span><i class="bi bi-chevron-double-right"></i> This Page</span>
                        </div>
                        <h2 class="mb-4">At vero eos accusamu iusto odio dignissimos ducimus blanditiis praesentium voluptatum</h2>
                        <span class="subtx-summit">Juli 19, 2022 | Admin Summit 22</span>
    
                        <div class="bg-light my-4" style="height: 320px"></div>
    
                        <p>Nam libero tempore, eligendi optio nihil minus facere, voluptas dolor repellendus. Temporibus quibusdam et officiis sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <h2 class="tx-summit mb-4"><b>Bagi dengan temanmu</b></h2>

                        <!-- AddToAny BEGIN -->
                        <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
                            <a class="a2a_button_facebook me-2 mb-3"><img src="{{ asset('image/web-asset/icon_social_facebook.png') }}" width="32" height="32" class=""alt=""></a>
                            <a class="a2a_button_twitter me-2 mb-3"><img src="{{ asset('image/web-asset/icon_social_twitter.png') }}" width="32" height="32" class=""alt=""></a>
                            <a class="a2a_button_line me-2 mb-3"><img src="{{ asset('image/web-asset/icon_social_line.png') }}" width="32" height="32" class=""alt=""></a>
                            <a class="a2a_button_whatsapp me-2 mb-3"><img src="{{ asset('image/web-asset/icon_social_whatsapp.png') }}" width="32" height="32" class=""alt=""></a>
                            <a class="a2a_button_telegram me-2 mb-3"><img src="{{ asset('image/web-asset/icon_social_telegram.png') }}" width="32" height="32" class=""alt=""></a>
                            <a class="a2a_button_linkedin me-2 mb-3"><img src="{{ asset('image/web-asset/icon_social_linkedin.png') }}" width="32" height="32" class=""alt=""></a>
                        </div>
                        <script async src="https://static.addtoany.com/menu/page.js"></script>
                        <!-- AddToAny END -->
                    </div>
                </div>
                

            </div>
        </div>
    </div>

    <div class="container-fluid mt-5 bg-foter-tiket">
        @include('event_detail.part.footer_tiket')
    </div>

    {{-- footer --}}
    @include('layout.footer')
    
@endsection