@extends('admin.master')
@section('content')
<div class="container-fluid">
            <div class="row">
                @include('delivery_man.sub_profile');

             @isset($product)
             @foreach($product as $value)
                        <!--<div class="col-lg-8 col-xl-9">-->
                        <!--    <div class="card">-->
                        <!--        <div class="card-body">-->
                        <!--            <small>-->
                        <!--                   <b>urgant delivery:</b>{{$value->urgent_delivery}}<br>-->
                        <!--                   <b>Invocie Id:</b>{{$value->admin_invoice_id}}<br>-->
                        <!--                   <b>customer name:</b>{{$value->customer_name}}<br>-->
                        <!--                   <b>customer address:</b>{{$value->customer_address}}<br>-->
                        <!--                   <b>customer phone:</b>{{$value->customer_phone}}<br>-->
                        <!--                   <b>merchandise name:</b><br>-->
                        <!--                   <b>merchandise phone:</b><br>-->
                        <!--                   <b>product name:</b><br>-->
                        <!--                   <b>prodcut price:</b><br>-->
                        <!--                   <b>delivery charge:</b><br>-->
                        <!--                   <b>total amount:</b>-->
                                          
                        <!--            </small><br>-->
                        <!--           <button class="btn btn-success btn-xs">Delivery done</button><button class="btn btn-primary btn-xs">hold</button><button class="btn btn-danger btn-xs">return</button><button class="btn btn-info btn-xs">On the way</button>-->
                        <!--        </div>-->
                        <!--    </div>                            -->
                        <!--</div>-->
        @endforeach
        @endisset




              
                        </div>
                    </div>
                </div>
            </div>

@endsection