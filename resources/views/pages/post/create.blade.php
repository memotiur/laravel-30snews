@extends('layouts.app')

@section('title', 'Create User')


@section('content')
    {{--  <h3>Create User</h3>
      <hr>--}}

    <div class="col-sm-12">
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
            <div class="panel-heading">New Post</div>

            <div class="panel-body">

                <form class="form-horizontal" method="post" action="/post/store"
                      enctype="multipart/form-data">


                    <div class="form-group">
                        <label class="col-lg-2 control-label">Headline</label>
                        <div class="col-lg-10">
                            <input type="hidden" class="form-control" name="_token" value="{{csrf_token()}}">
                            <input type="text" placeholder="Headline" class="form-control" name="post_headline"
                                   required>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-lg-2 control-label">Details <p style="color: red">Word: <span id="counter">0</span></p></label>
                        <div class="col-lg-10">
                            <textarea class="form-control" name="post_description" rows="14" onkeyup="countWord(this)"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Category</label>
                        <div class="col-lg-10">
                            <select name="post_category" class="form-control m-b">
                                @foreach($categories as $category)
                                    <option value="{{$category->category_id}}">{{$category->category_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Language</label>
                        <div class="col-lg-10">
                            <select name="post_language" class="form-control m-b">
                                <option value="Bangla">Bangla</option>
                                <option value="English">English</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">Image</label>
                        <div class="col-lg-10">
                            <input type="file" class="form-control" name="image">
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-lg-2 control-label">Source Name</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="post_source_name">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 control-label">Url</label>
                        <div class="col-lg-10">
                            <textarea type="text" class="form-control" name="post_source_url"></textarea>
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <button type="submit" class="btn btn-sm btn-primary">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>


    <script type="text/javascript">
        let counter=0;
        function countWord(param) {

            var spaceCount = (param.value.split(" ").length - 1);
            console.log(spaceCount);
            if(spaceCount>60){
                toastr.warning('Word limit Exceed! Remove '+(spaceCount-60)+" Word")
            }
            document.getElementById("counter").textContent=spaceCount;
        }


    </script>
@endsection