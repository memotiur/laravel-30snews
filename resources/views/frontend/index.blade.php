<!DOCTYPE html>
<html lang="en">
<head>
    <title>30s News</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
    <div class="row">
        <div class="col-md-9">
            @foreach($news as $post)
                <div class="row mb-2">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                       <img class="img-thumbnail featured-image"
                                             src="/images/post/{{$post->post_image}}">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="news-title">
                                            <h5>{{$post->post_headline}}</h5>
                                        </div>
                                        <div class="news-cats">
                                            <ul class="list-unstyled list-inline mb-1">
                                                <li class="list-inline-item">
                                                    <i class="fa fa-folder text-danger"></i>
                                                    <a href="/category/{{$post->category_name}}">
                                                        <small class="badge badge-danger">{{$post->category_name}}</small>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <i class="fa fa-user text-danger"></i>
                                                    <a href="#">
                                                        <small>মতিউর রহমান</small>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <i class="fa fa-calendar text-danger"></i>
                                                    <small>{{$post->created_at}}</small>
                                                </li>


                                            </ul>
                                        </div>
                                        <div class="news-content">
                                            <p>{{$post->post_description}}</p>
                                        </div>
                                        <div class="news-buttons">
                                            <small>আরো পড়ুন <span><a href="@if(substr( $post->post_source_url, 0, 4 ) === "http") {{$post->post_source_url}} @else http://{{$post->post_source_url}} @endif"
                                                                     target="_BLANK">{{$post->post_source_name}}</a>  </span>
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>


        <div class="col-md-3">
            <div class="row">
                <div class="col-md-12">
                    <!-- android button -->
                    <a class="btn btn-lg btn-success big-btn android-btn" href="http://www.playstore.com"
                       target="_BLANK">
                        <img width="80px" class="pull-left"
                             src="http://www.userlogos.org/files/logos/jumpordie/google_play_04.png">
                        <div class="btn-text">
                            <small>Available on</small>
                            <br><strong>Google Play</strong></div>
                    </a>


                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-12 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <img src="http://www.3forty.media/cannix/wp-content/uploads/2018/04/clem-onojeghuo-228522-unsplash-1-768x1153.jpg"
                                 width="100%">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
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
                    <li><a href="#"> Terms & conditions</a></li>
                    <li><a href="#">Privacy Policies</a></li>
                    <li><a href="#">Sitemap</a></li>
                    <li><a href="/login">Login</a></li>

                </ul>
            </div>
            <div class="col-md-4">
                <p>Contact</p>
                    Tolarbgah</br>
                    Mirpur-1, Dhaka
            </div>
        </div>
    </div>

</div>

</body>
</html>
