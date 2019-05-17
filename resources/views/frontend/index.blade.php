@extends('layouts.frontend')

@section('title', '30s News')


@section('content')
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
                                                <a href="/author/{{$post->id}}">
                                                    <small>{{$post->name}}</small>
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

@endsection