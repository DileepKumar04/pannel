
@extends('Admin.master')
@section('content')

<div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Data Table</h1>
                        <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text. </h1>

                    </div>
                </div>
                <!-- /. ROW  -->
              
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Sno</th>
                                            <th>First Name</th>
                                            <th>Email</th>
                                            <th>Contact</th>
                                            <th>Address</th>
                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                              
@foreach($user as $userdetails)
                                        <tr id="customer_id_{{ $userdetails->id }}">
                              

<td>1</td>
                                            <td>{{$userdetails->name}}</td>
                                            <td>{{$userdetails->email}}</td>
                                            <td>{{$userdetails->contact}}</td>
                                            <td>{{$userdetails->address}}</td>
                         <td><a href="javascript:void(0)"  data-toggle="modal" id="edit-customer" data-target="#myModal" class="btn btn-primary edit" 
                          data-id="{{ $userdetails->id }}" data-name="{{$userdetails->name}}"  >Edit</a>
                        <a href="" data-toggle="modal" data-target="#myModal" class="btn btn-danger">Delete</a></td>
                        
                                      



                                        </tr>

                         @endforeach
                                    </tbody>
                                </table>
                            </div>
                      
</div></div></div></div>
@endsection('content')


<body>

<div class="container">
 
  <!-- Trigger the modal with a button -->


  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Personal info</h4>
        </div>
        <div class="modal-body">


<div class="form-group">
      <label for="usr">Name:</label>
      <input type="text" class="form-control" id="name" name="name"   value={{$userdetails->name}}>
    </div>
    <div class="form-group">
      <label for="pwd">Email:</label>
      <input type="email" class="form-control" id="email" name="email">
    </div>

    <div class="form-group">
      <label for="pwd">Contact:</label>
      <input type="text"  name="contact"  class="form-control" id="contact">
    </div>
    <div class="form-group">
      <label for="address">Address:</label></br>

<textarea id="address" name="address" rows="4" cols="50">
At w3schools.com you will learn how to make a website. They offer free tutorials in all web development technologies.
</textarea>

    </div>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

</body>


<script>



  $(".edit").click(function(event){
      event.preventDefault();

      let name = $('#name').val(($this).data('id'));
      let email = $("input[name=email]").val();
      let contact = $("input[name=contact]").val();
      let address = $("input[name=address]").val();
      let _token   = $('meta[name="csrf-token"]').attr('content');

      $.ajax({
        url: "/edit",
        type:"POST",
        data:{
          name:name,
          email:email,
          mobile_number:mobile_number,
          message:message,
          _token: _token
        },
        success:function(response){
        // window.print(response.data.name);
alert(response.data.name);
//abcd=response.data.name;
$("#name").val(response.data.name); 
    
          if(response) {

     
            $('.success').text(response.success);
            $("#ajaxform")[0].reset();
          }
        },
       });
  });
</script>
