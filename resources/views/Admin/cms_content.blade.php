@extends('Admin.master')
@section('content')
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        



            @if (session('Content_delete'))
            <div class="alert alert-success">
                {{ session('Content_delete') }}
            </div>
            @endif
    <div class="row">
                <div class="col-md-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Content table
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Page Name</th>
                                            <th>Title</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

<?php 

$a=0;
?>

@foreach($cms_content as $cms_content_detail)
                                        <tr>
   <?php $a++ ?>                                      
                                            <td>{{$a}}</td>


                                            <td>{{$cms_content_detail->page_name}}</td>
                                            <td>{{$cms_content_detail->title}}</td>
                                            <td><a href="">Active</a></td>
     
    <td><a href="{{route('content_edit' , ['id'=>$cms_content_detail->id])}}" target="_blank">Edit</a><a href="{{route('delete' , ['id'=>$cms_content_detail->id])}}" onclick="return confirm('Are you sure you want to delete this Content?');">|Delete</a></td>
                                        

                                        </tr>

@endforeach

                 </tbody>

                                </table>
{{ $cms_content->links('pagination::bootstrap-4') }}
                            </div>
                        </div>
                    </div>
</div>
               








                </div>

</div>


</div>


</div>
@endsection('content')