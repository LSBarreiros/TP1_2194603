<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
    
         <title>{{ config('app.name') }} - @yeld('title')</title>     {{--// "app.name"  est une variable globale cree sur .env --}}
 
                <!-- Favicons -->

                <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
                <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">
              
                <!-- Google Fonts -->
                <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
              
                <!-- Vendor CSS Files -->
                <link href="{{asset('assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
                <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
                <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
                <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
                <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
                <link href="{{asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
                <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
              
                <!-- Template Main CSS File -->
                <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
 
 
    <body>
        
        @include('layout.nav')
        @include('_messages')
        @yield('content')

        @include('layout.footer')
        @include('layout.footer-scripts')
     
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    </body>
    </html>