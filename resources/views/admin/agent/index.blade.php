@extends('admin.master')
@section('content')




<div class="container-fluid mt-3">
    
    <!-- modal start -->
 

    <div class="card-body">

<div class="bootstrap-modal">


    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">এজেন্ট নিবন্ধন ফর্ম</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ url('regiser_all_users')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">

                        <!-- <div class="form-group">
                            <label for="invoice-id" class="col-form-label">invoice id:</label>
                            <input type="text" class="form-control" name="invoice_id" id="invoice-id">
                        </div> -->
                        <div class="form-group">
                            <label for="name" class="col-form-label">এজেন্ট এর নাম:</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="লিখুন এজেন্ট এর নাম">
                        </div>
                        <!-- <div class="form-group">
                            <label for="email" class="col-form-label">email:</label>
                            <input type="email" class="form-control" name="email" id="email">
                        </div> -->
                        <div class="form-group">
                            <label for="phone" class="col-form-label">এজেন্ট মোবাইল নাম্বার:</label>
                            <input type="text" class="form-control" name="phone" id="phone" placeholder="লিখুন এজেন্ট এর মোবাইল নাম্বার">
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-form-label">এজেন্ট এর পাসওয়ার্ড:</label>
                            <input type="text" class="form-control" name="password" id="password" placeholder="লিখুন এজেন্ট এর পাসওয়ার্ড">
                        </div>
                      
                        <div class="form-group">
                            <label for="address" class="col-form-label">এজেন্ট এর ঠিকানা:</label>
                            <input type="text" class="form-control" name="address" id="address" placeholder="লিখুন এজেন্ট এর ঠিকানা">
                        </div>
                        <div class="form-group">
                         
                            <input type="hidden" class="form-control" name="role_id" id="role_id" value="3">
                        </div>
                        <div class="form-group">
                            <label for="images" class="col-form-label">এজেন্ট এর ছবি :</label>
                            <input type="file" class="form-control" name="images" id="images">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">বাদ দিন</button>
                        <button type="submit" class="btn btn-primary">বার্তা পাঠান</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

    
                                <div class="modal-header">
                               
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">এজেন্ট নিবন্ধন করুন</button>
                            </div>
    
    <!-- end modal -->
    <div class="row">
        @isset($product)
            @foreach($product as $value)

        <div class="col-lg-3 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="text-center">
                    <img src="{{asset('public/admin/agent/'.$value->images)}}" width="100" height="100" class="rounded-circle" alt="">
                        <h5 class="mt-3 mb-1">{{$value->name}}</h5>
                        <p class="m-0">{{$value->address}}</p>
                        <a href="{{URL::to('admin_agent_profile/'.$value->id)}}" class="btn btn-sm btn-success">View</a>
                        <button type="button"  class="b" data-id="{{ $value->id }}" style="background-color:red;padding:4px; border:none;border-radius: 5px;color:white" class="btn btn-danger btn-sm">Delete</button></br>

                        <a href="{{ URL::to('admin_agent_pickup/'.$value->id) }}" class="btn btn-sm btn-warning">পিকআপ</a>
                        <a href="{{URL::to('admin_agent_delivery/'.$value->id)}}" class="btn btn-sm btn-warning">ডেলিভারি</a>
                        
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    @endisset
       
      
        <!-- <div class="col-lg-3 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="text-center">
                        <img src="{{ asset('public/asset/images/users/1.jpg')}}" class="rounded-circle" alt="">
                        <h5 class="mt-3 mb-1">Mehedi Titas</h5>
                        <p class="m-0">Online Marketer</p>
                         <a href="javascript:void()" class="btn btn-sm btn-warning">Send Message</a> 
                    </div>
                </div>
            </div>
        </div> -->

    </div>

  
    

     <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>-->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
// $(document).ready(function(){
//   $(".field").change(function(){
//     alert("ok")
//   });
// });


$(document).ready(function(){

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

   // alert("The paragraph was clicked. -"+id);
   $(".b").click(function(){
    var id=$(this).data("id");
    


	//alert(id);


                swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this imaginary file!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
                })
                .then((willDelete) => { 
                if (willDelete) {
                    $.ajax({
            url: '{{ url('admin_agent_delete') }}',
            method: 'POST',
            data: {

                agent_id: id,
               
            },
            dataType: "json",
            success: function(data) {

              //  alert(data);
                console.log(data);
               


            },
            error: function(error) {
                console.log("not ok");

            }
        })






                    swal("Roll Star has been deleted!", {
                    icon: "success",
                    });
                    location.reload(true); 
                } else {
                    swal("Your imaginary file is safe!");
                   
                }
                });


 


    });
  
});
</script>
    




<!-- #/ container -->
</div>
@endsection