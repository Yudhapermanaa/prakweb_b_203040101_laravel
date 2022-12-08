<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    {{-- Bootstrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    {{-- My Styles CSS --}}
    <link rel="stylesheet" href="/css/style.css">
    
    {{-- Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@100;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Amaranth&display=swap" rel="stylesheet">
    <style>
        .card-title, .categories {
            font-family: 'Barlow Condensed', sans-serif;
        }
        .btn, .content ,.posts, .post, .input-group, .login, .register{
            font-family: 'Barlow Condensed', sans-serif;
        }
        .nav-item, .dropdown-item {
            font-family: 'Barlow Semi Condensed', sans-serif;
            font-size: 15.5px;
            font-weight: 500;
        }
        .navbar-brand {
            font-family: 'Amaranth', sans-serif;
            font-weight: 600;
        }
        .title {
            font-family: 'Barlow Condensed', sans-serif;
        }
        .banner-image {
            background-image: url(img/background-home.jpg);
            background-size: cover;
        }
    </style>

    <title>YUDHA Blog | {{ $title }}</title>
</head>

<body>
    
    @include('partials.navbar')

    <div class="container" style="margin-top: 110px;">
        @yield('container')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
        var nav = document.querySelector('nav');
    
        window.addEventListener('scroll', function(){
            if (window.pageYOffset > 10) {
                nav.classList.add('bg-light', 'shadow');
            } else {
                nav.classList.remove('bg-light', 'shadow');
            }
        });
    </script>

</body>

</html>