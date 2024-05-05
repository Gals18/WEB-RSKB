<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    @include('component.layout.meta')

</head>
<style>
    @keyframes float {
        0% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-10px);
        }

        100% {
            transform: translateY(0);
        }
    }

    .animated-text {
        animation: float 2s ease-in-out infinite;
    }
</style>

<body>



    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    {{-- <div class="loading-container">
        <div class="loading-spinner"></div>
    </div> --}}
    <main class="main" id="top">

        <div class="loader">
            <div class="loader__bar"></div>
            <div class="loader__bar"></div>
            <div class="loader__bar"></div>
            <div class="loader__bar"></div>
            <div class="loader__bar"></div>
            <div class="loader__ball"></div>
        </div>

        @include('component.navbar')
        <!-- ===============================================-->
        <!--    carousel Content-->
        <!-- ===============================================-->


        <!-- =========
            ===================================-->
        <!-- <section> begin ============================-->

        @yield('content')

        @include('component.footer')
        <!-- <section> close ============================-->
        <!-- ============================================-->




        <!-- ============================================-->
        <!-- <section> begin ============================-->
        @include('component.lisensi')
        <!-- <section> close ============================-->
        <!-- ============================================-->


    </main>


    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="{{ asset('productly') }}/public/vendors/@popperjs/popper.min.js"></script>
    <script src="{{ asset('productly') }}/public/vendors/bootstrap/bootstrap.min.js"></script>
    <script src="{{ asset('productly') }}/public/vendors/is/is.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="{{ asset('productly') }}/public/vendors/fontawesome/all.min.js"></script>
    <script src="{{ asset('productly') }}/public/assets/js/theme.js"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
    {{-- <script src="path/to/bootstrap.bundle.min.js"></script> --}}
    <script>
        // Untuk membuat dropdown terbuka saat kursor diarahkan
        $('.dropdown').hover(function() {
            $(this).addClass('show');
            $(this).find('.dropdown-menu').addClass('show');
        }, function() {
            $(this).removeClass('show');
            $(this).find('.dropdown-menu').removeClass('show');
        });
    </script>

    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&amp;family=Volkhov:wght@700&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    {{-- <div class="kotak animated-text" data-tilt>
    <h3>Tulisan</h3>
</div> --}}
</body>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<script type="text/javascript" src="{{ asset('productly') }}/public/assets/js/vanilla-tilt.min.js"></script>

</html>
