<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="Orbitor,business,company,agency,modern,bootstrap4,tech,software">
    <meta name="author" content="themefisher.com">

    <title>Rogilipy - Health & Care Medical</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.ico" />

    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="https://technext.github.io/novena/plugins/bootstrap/css/bootstrap.min.css">
    <!-- Icon Font Css -->
    <link rel="stylesheet" href="https://technext.github.io/novena/plugins/icofont/icofont.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/fontawesome.min.css"
        integrity="sha512-8Vtie9oRR62i7vkmVUISvuwOeipGv8Jd+Sur/ORKDD5JiLgTGeBSkI3ISOhc730VGvA5VVQPwKIKlmi+zMZ71w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- Slick Slider  CSS -->
    <link rel="stylesheet" href="https://technext.github.io/novena/plugins/slick-carousel/slick/slick.css">
    <link rel="stylesheet" href="https://technext.github.io/novena/plugins/slick-carousel/slick/slick-theme.css">
    <!-- Datatables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font.css">
    <link rel="stylesheet" href="css/loading.css">

    <style>
        .footerRogilipy {
            font-family: 'Lobster';
            font-size: 50px;
            color: rgb(243, 7, 125);
        }
    </style>
    @yield('style')




</head>

<body id="top" onload="pageLoader()">

    <div id="pre_loader">
        <div class="loader">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>



    <div class="sticky-top">
        @include('layout.headers.header')
    </div>

    <div class="container">
        <div class="d-flex flex-column flex-root">
            {{-- Flash Messages Start --}}
            @if (Session::has('message'))
            <div class="text-center alert alert-{{ Session::get('class') }}">
                {{ Session::get('message') }}
            </div>
            @endif
            @yield('content')
        </div>
    </div>


    @include('layout.partials.footer')

    <!--====== Javascripts & Jquery ======-->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.26.0/axios.min.js"
        integrity="sha512-bPh3uwgU5qEMipS/VOmRqynnMXGGSRv+72H/N260MQeXZIK4PG48401Bsby9Nq5P5fz7hy5UGNmC/W1Z51h2GQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        let preloader = document.getElementById('pre_loader');
          function pageLoader(){
            preloader.style.display = 'none';
          }
    </script>
    @yield('scripts')
</body>

</html>
