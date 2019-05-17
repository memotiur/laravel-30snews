@extends('layouts.app')

@section('title', 'Admin Home')


@section('content')

    <h3>Dashboard</h3>
    {{--     <div data-toggle="notify" data-onload
              data-message="&lt;b&gt;New Updates Available!&lt;/b&gt; Don't forget to check them!"
              data-options="{&quot;status&quot;:&quot;danger&quot;, &quot;pos&quot;:&quot;top-right&quot;}"
              class="hidden-xs"></div>
         <div class="row">--}}

    <div class="col-md-9">

        <div class="row">
            <div class="col-lg-3 col-sm-6">

                <div data-toggle="play-animation" data-play="fadeInDown" data-offset="0" data-delay="100"
                     class="panel widget">
                    <div class="panel-body bg-primary">
                        <div class="row row-table row-flush">
                            <div class="col-xs-8">
                                <p class="mb0">Posts</p>
                                <h3 class="m0">{{$posts}}</h3>
                            </div>
                            <div class="col-xs-4 text-center">
                                <em class="fa fa-user fa-2x"><sup class="fa fa-plus"></sup>
                                </em>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">

                        <div class="text-center">
                            <div data-bar-color="primary" data-height="30" data-bar-width="6"
                                 data-bar-spacing="6" class="inlinesparkline inline">
                                5,3,4,6,5,9,4,4,10,5,9,6,4
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">

                <div data-toggle="play-animation" data-play="fadeInDown" data-offset="0" data-delay="500"
                     class="panel widget">
                    <div class="panel-body bg-warning">
                        <div class="row row-table row-flush">
                            <div class="col-xs-8">
                                <p class="mb0">Authors</p>
                                <h3 class="m0">{{$authors}}</h3>
                            </div>
                            <div class="col-xs-4 text-center">
                                <em class="fa fa-mail-reply fa-2x"></em>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">

                        <div class="text-center">
                            <div data-bar-color="warning" data-height="30" data-bar-width="6"
                                 data-bar-spacing="6" class="inlinesparkline inline">
                                10,30,40,70,50,90,70,50,90,40,40,60,40
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">

                <div data-toggle="play-animation" data-play="fadeInDown" data-offset="0" data-delay="1000"
                     class="panel widget">
                    <div class="panel-body bg-danger">
                        <div class="row row-table row-flush">
                            <div class="col-xs-8">
                                <p class="mb0">Unpublished </p>
                                <h3 class="m0">{{$posts-$published_count}}</h3>
                            </div>
                            <div class="col-xs-4 text-center">
                                <em class="fa fa-question fa-2x"></em>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">

                        <div class="text-center">
                            <div data-bar-color="danger" data-height="30" data-bar-width="6"
                                 data-bar-spacing="6" class="inlinesparkline inline">
                                2,7,5,9,4,2,7,5,7,5,9,6,4
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">

                <div data-toggle="play-animation" data-play="fadeInDown" data-offset="0" data-delay="1500"
                     class="panel widget">
                    <div class="panel-body bg-success">
                        <div class="row row-table row-flush">
                            <div class="col-xs-8">
                                <p class="mb0">Published Post</p>
                                <h3 class="m0">{{$published_count}}</h3>
                            </div>
                            <div class="col-xs-4 text-center">
                                <em class="fa fa-check fa-2x"></em>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">

                        <div class="text-center">
                            <div data-bar-color="success" data-height="30" data-bar-width="6"
                                 data-bar-spacing="6" class="inlinesparkline inline">
                                4,7,5,9,6,4,8,6,3,4,7,5,9
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="col-md-3">

        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panel-title">Activity feed</div>
            </div>

            <div class="list-group">

                @foreach($all_post as $post)

                    <div class="list-group-item">
                        <div class="media">
                            <div class="pull-left">
<span class="fa-stack fa-lg">
<em class="fa fa-circle fa-stack-2x text-green"></em>
<em class="fa fa-bell fa-stack-1x fa-inverse text-white"></em>
</span>
                            </div>
                            <div class="media-body clearfix">

                                <p class="m0">
                                    <small>{{$post->post_headline}}
                                    </small>
                                </p>
                                <small>{{$post->created_at}}</small>
                            </div>
                        </div>
                    </div>

                @endforeach


            </div>


            <div class="panel-footer clearfix">
                <a href="/post/show" class="pull-left">
                    <small>Load more</small>
                </a>
            </div>

        </div>
    </div>

@endsection