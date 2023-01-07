@extends('admin.master')
@section('content')




<div class="container-fluid mt-3">
    

    <div class="row">
        @isset($product)
            @foreach($product as $value)

        <div class="col-lg-3 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="text-center">
                   
                        <img src="{{asset('public/admin/merchandise/'.$value->images)}}" width="100" height="100" class="rounded-circle" alt="">
                        <h5 class="mt-3 mb-1">{{$value->name}}</h5>
                        <p class="m-0">{{$value->phone}}</p>
                        <p class="m-0">{{$value->address}}</p>
                      
                        <a href="{{ URL::to('admin_merchandise_product_list/'.$value->id) }}" class="btn btn-sm btn-warning">পন্যের তালিকা</a>
                        <!-- <a href="{{URL::to('admin_merchandise_delivery/'.$value->id)}}" class="btn btn-sm btn-warning">Delivery add</a> -->
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
                        <img src="{{ asset('public/asset/images/users/5.jpg')}}" class="rounded-circle" alt="">
                        <h5 class="mt-3 mb-1">John Abraham</h5>
                        <p class="m-0">Store Manager</p>
                        <a href="javascript:void()" class="btn btn-sm btn-warning">Send Message</a> 
                    </div>
                </div>
            </div>
        </div>
        -->
       

    </div>

  
    

<!-- #/ container -->
</div>
@endsection