@extends('Admin.master')
@section('content')
        <div id="page-wrapper">






            @if (session('Content_update'))
            <div class="alert alert-success">
                {{ session('Content_update') }}
            </div>
            @endif



<body>{{-- 
<form action="{{route('banner')}}}" method=post>
@csrf --}}
    <div class="container">
        <div class="row">
            <div class="col-md-7 offset-3 mt-4">
                <div class="card-body">
                    <form method="post" action="{{route('banner' ,['content_id'=>$content_detail->id])}}" enctype="multipart/form-data">
                        @csrf
                       

                        <div class="form-group">
<input type="text" name="page_name" value="{{$content_detail->page_name}}">
                        </div>
                        <div class="form-group">

<input type="text" name="title" value="{{$content_detail->title}}">


                        </div>


                        <div class="form-group">
                            <textarea class="ckeditor form-control" name="texteditor" >{{$content_detail->description}}</textarea>
                        </div>




<div class="form-group">

<input type="submit" name="submit" value="update">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>



</body>
{{-- 
<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });
</script>
 --}}




</div>
@endsection('content')