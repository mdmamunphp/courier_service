@extends('admin.master')
@section('content')




<div class="container-fluid mt-3">
    
    <!-- modal start -->



    
    
    <!-- end modal -->
    <div class="row">
        @isset($product)
            @foreach($product as $value)

        <div class="col-lg-3 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="text-center">
                        <img src="{{ asset('public/asset/images/users/8.jpg')}}" class="rounded-circle" alt="">
                        <h5 class="mt-3 mb-1">{{$value->name}}</h5>
                        <p class="m-0">{{$value->address}}</p>
                        <a href="{{ URL::to('merchandise_payment_status/'.$value->id) }}" class="btn btn-sm btn-warning">Payment Status</a>
                        <!-- <a href="{{URL::to('admin_agent_delivery/'.$value->id)}}" class="btn btn-sm btn-warning">Delivery</a> -->
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    @endisset
        <div class="col-lg-3 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="text-center">
                        <img src="{{ asset('public/asset/images/users/5.jpg')}}" class="rounded-circle" alt="">
                        <h5 class="mt-3 mb-1">John Abraham</h5>
                        <p class="m-0">Store Manager</p>
                        <!-- <a href="javascript:void()" class="btn btn-sm btn-warning">Send Message</a> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="text-center">
                        <img src="{{ asset('public/asset/images/users/7.jpg')}}" class="rounded-circle" alt="">
                        <h5 class="mt-3 mb-1">John Doe</h5>
                        <p class="m-0">Sales Man</p>
                        <!-- <a href="javascript:void()" class="btn btn-sm btn-warning">Send Message</a> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="text-center">
                        <img src="{{ asset('public/asset/images/users/1.jpg')}}" class="rounded-circle" alt="">
                        <h5 class="mt-3 mb-1">Mehedi Titas</h5>
                        <p class="m-0">Online Marketer</p>
                        <!-- <a href="javascript:void()" class="btn btn-sm btn-warning">Send Message</a> -->
                    </div>
                </div>
            </div>
        </div>

    </div>

  
    

<!-- #/ container -->
</div>
@endsection