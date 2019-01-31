@extends('layouts.app')

@section('title', 'All Post')


@section('content')
    <h3>All Post</h3>
    <hr>

    <div class="row">
        <div class="col-lg-12">
            @if(session('success'))

                <div class="alert alert-success">{{session('success')}}!</div>

            @endif
            @if(session('failed'))
                <div class="alert alert-danger">
                    {{session('failed')}}!
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="panel panel-default">
                <div class="panel-heading">Post Table
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table id="datatable2" class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Headline</th>
                                <th>Details</th>
                                <th>Category</th>
                                <th>
                                    <div class="media">Photo</div>
                                </th>
                                {{-- <th>Email</th>--}}
                                {{-- <th class="sort-numeric">Phone</th>--}}
                                {{--<th class="sort-alpha">Joining date</th>--}}
                                {{--  <th>Birthdate</th>--}}
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php($i=1)
                            @foreach($posts as $res)
                                <tr class="gradeX">
                                    <td>{{$i++}}</td>
                                    <td>{{$res->post_headline}}</td>
                                    <td>{{$res->post_description}}</td>
                                    <td>{{$res->category_name}}</td>
                                    <td>
                                        <div class="media">
                                            <img src="/images/post/{{$res->post_image}}" alt="Image"
                                                 class="img-responsive">
                                        </div>
                                    </td>
                                    <td>
                                        @if($res->post_publish_status==1)
                                            <button type="button"
                                                    class="btn btn-success btn-xs">Published
                                            </button>
                                        @elseif($res->post_publish_status==0)
                                            <button type="button"
                                                    class="btn btn-danger btn-xs">Unpublished
                                            </button>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <a href="javascript:void(0);" data-toggle="dropdown"
                                               class="btn btn-default btn-xs dropdown-toggle">
                                                <em class="fa fa-angle-down"></em>Action</a>
                                            <ul class="dropdown-menu pull-right text-left">
                                                <li><a href="/post/edit/{{$res->post_id}}">Edit</a></li>
                                                <li><a href="/post/destroy/{{$res->post_id}}">Delete</a>
                                                </li>@if($res->post_publish_status!=1)
                                                    <li><a href="/post/publish/{{$res->post_id}}">Publish</a></li>
                                                @else
                                                    <li><a href="/post/unpublish/{{$res->post_id}}">unpublish</a></li>
                                                @endif

                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection