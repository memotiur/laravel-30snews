<!DOCTYPE html>
<html lang="en">
<head>

    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="/frontend/img/logo.png" type="image/gif" sizes="16x16">
    <link rel="stylesheet" href="/frontend/css/custom.css">
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-light navbar-custom">


    <div class="container">
        <a class="navbar-brand" href="/"><img src="/frontend/img/logo.png" height="50px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse bg-dark" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/category/বাংলাদেশ">বাংলাদেশ </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/category/টেকনোলজি">টেকনোলজি</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/category/সারা বিশ্ব">সারা বিশ্ব</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/category/লাইফস্টাইল">লাইফস্টাইল </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/category/বিনোদন">বিনোদন </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/category/ব্যবসা">ব্যবসা</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/category/খেলাধুলা">খেলাধুলা </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/category/রাজনীতি">রাজনীতি </a>
                </li>
            </ul>
            <form class="form-inline mt-2 mt-md-0">
                <!--<input class="form-control mr-sm-2" type="text" placeholder="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>-->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">যোগাযোগ</a>
                    </li>
                </ul>
            </form>
        </div>
    </div>

</nav>
<div class="container">
    <br>
    <br>
    <br>

    @yield('content')
</div>

<div class="footer">

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <p style="text-align: left">
                    <a class="navbar-brand" href="/"><img src="/frontend/img/logo.png" height="50px"></a>
                </p>


                <p style="text-align: left">
                    Tolarbgah</br>
                    Mirpur-1, Dhaka
                </p>
            </div>
            <div class="col-md-4">
                <ul class="terms">
                    <li><a href="/terms-and-condition"> Terms & conditions</a></li>
                    <li><a href="/privacy">Privacy Policies</a></li>
                    <li><a href="#">Sitemap</a></li>
                    <li><a href="/login">Login</a></li>

                </ul>
            </div>
            <div class="col-md-4">
                <p>Contact</p>

                Concord Regency<br>
                19/1 Panthapath (1st Floor)<br>
                Dhaka 1205
            </div>
        </div>
    </div>

</div>

</body>
</html>
