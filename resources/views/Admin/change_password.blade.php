@extends('Admin.master')
@section('content')
        <div id="page-wrapper">
            <div id="page-inner">

    <div class="container">
        <div class="row text-center " style="padding-top:100px;">
            <div class="col-md-12">
        {{--         <img src="assets/img/logo-invoice.png" />
         --}}    </div>
        </div>
         <div class="row ">
               
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                           
                            <div class="panel-body">
                                <form action="/password_update" method="post">
                                    @csrf
                                    <hr />
                                       <br />
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input type="password" class="form-control" placeholder="password " name="password" required="" />
                                        </div>
                                                                              <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" class="form-control"  placeholder="confirm_password" required="" name="confirm_password" />
                                        </div>
                                    <input type="submit" name="submit" value="Update" class="btn btn-primary "> 
                                    <hr />
                                    </form>
                            </div>
                           
                        </div>
                
                
        </div>
    </div>

</div></div>
@endsection('content')