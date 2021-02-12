<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <title>Post</title>
</head>
<body>
    <!-- Logo -->
    <nav class="navbar navbar-light bg-main">
        <div class="container p-4">
            <a class="navbar-brand m-auto" href="#">
                <img src="{{asset('images/dc.png')}}" width="120" alt="" loading="lazy">
            </a>
        </div>
    </nav>

    <!-- Content -->
    @yield('content') @section('content') @endsection

    <!-- Footer -->
    <footer class="container-fluid bg-main">
        <div class="row text-center p-4">
            <div class="mb-3">
                <img src="{{asset('images/dc.png')}}" alt="YouDevs logo" width="120" id="logofooter">
            </div>
            <div id="col-md-10">
                <a href="">
                    <img src="{{asset('images/linkedin.png')}}" class="img-fluid" width="40px" alt="facebook youdevs">
                </a>
                <a href="">
                    <img src="{{asset('images/google-plus.png')}}" class="img-fluid" width="40px" alt="instagram youdevs">
                </a>
                <a href="">
                    <img src="{{asset('images/twitter.png')}}" class="img-fluid" width="40px" alt="youtube youdevs">
                </a>
                <p class="mt-3">Copyright © 2021 Braunybrunista, Blog. <br> Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>