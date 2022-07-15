<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    
    <script type="text/javascript"
        src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="SB-Mid-client-cca-MatBYAciSaIf"></script>
    <!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment -->

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    
    <!-- Shareon -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/shareon@2/dist/shareon.min.css" rel="stylesheet"/>
    <script
        src="https://cdn.jsdelivr.net/npm/shareon@2/dist/shareon.iife.js"
        defer
        init
    ></script> --}}

    

</head>
<body>
    
    @yield('isi_halaman')
    
</body>
</html>