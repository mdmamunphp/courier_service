@extends('admin.master')
@section('content')
<div class="container-fluid">
                <div class="row">
              @include('delivery_man.sub_profile');
             @isset($product)
             @foreach($product as $value)
                        <div class="col-lg-8 col-xl-9">
                            <div class="card">
                                <div class="card-body">
                                    <small>
                                           <b>urgant delivery:</b>
                                           <?php
                                            if($value->urgent_delivery==1){
                                                echo "<h4 style='color:red'> Urgent Delivery</h4>";
                                            }
                                           ?>
                                         <br>
                                           <b>চালান নাম্বার :</b>{{$value->admin_invoice_id}}<br>
                                           <b>কাস্টমার এর নাম :</b>
                                           {{$value->customer_name}}<br>
                                           <b>ডেলিভারির ঠিকানা :</b>
                                           {{$value->customer_address}}<br> 
                                           <b>কাস্টমার এর মোবাইল নাম্বার:</b> 
                                           {{$value->customer_phone}}<br>
                                           <!-- <b>merchandise name:</b><br> -->
                                           <!-- <b>merchandise phone:</b><br> -->
                                           <!-- <b>product name:</b>{{$value->product_name}}<br> -->
                                           <b>পার্সেলটির মূল্য  :</b>{{$value->product_price}}<br>
                                           <b> ডেলিভারি চার্জ :</b>{{$value->delivery_charge}}<br>
                                         
                                           <b>ডেলিভারি অবস্থা  :</b>
                                           <?php
                                           if($value->delivery_status==1){
                                                echo "<h5 style='color:green'> পার্সেলটি ডেলিভারি সম্পন্ন হয়েছে।/h5";
                                           }elseif ($value->delivery_status==2) {
                                            echo "<h5  style='color:blue'>পার্সেলটি হোল্ড রাখা হয়েছে।</h5";
                                           }elseif ($value->delivery_status==3) {
                                            echo "<h5 style='color:red'>পার্সেলটি রিটার্ন করা হয়েছে</h5";
                                        }elseif ($value->delivery_status==4) {
                                            echo "<h5 style='color:skyblue'> পন্যটি প্রক্রিয়াধীন আছে।</h5";
                                        }
                                           ?>
                                           <br>
                                    </small>
                                   
                                    <form class="form-valide"  action="{{ URL::to('agent_delivery_status/'.$value->id) }}" method="post">
                                            @csrf
                                            <input type="hidden" name="delivery_status" value="1">                                           

                                            <input type="submit" class="btn btn-success btn-xs" value="Delivery done">
                                        </form> 
                                        <!--<form class="form-valide"  action="{{ URL::to('agent_delivery_status/'.$value->id) }}" method="post">-->
                                        <!--    @csrf-->
                                        <!--    <input type="hidden" name="delivery_status" value="2">                                           -->

                                        <!--    <input type="submit" class="btn btn-primary btn-xs" value="hold">-->
                                        <!--</form>  -->
                                        <form class="form-valide"  action="{{ URL::to('agent_delivery_status/'.$value->id) }}" method="post">
                                            @csrf
                                            <input type="hidden" name="delivery_status" value="4">                                           

                                            <input type="submit" class="btn btn-info btn-xs" value="On the way">
                                        </form> 
                                     <form class="form-valide" align="right" action="{{ URL::to('agent_delivery_hold/'.$value->id) }}" method="post">
                                            @csrf
                                            <input type="hidden" name="delivery_status" value="2">


                                            <select class="form-control" id="val-skill" name="hold_id">
                                                <option value="">Hold item select</option>
                                                @isset($hold)
                                                @foreach($hold as $val)
                                                <option value="{{$val->id}}">{{$val->name}}</option>
                                                @endforeach
                                                @endisset
                                            </select>

                                            <input type="submit" class="btn btn-danger btn-xs" value="hold">
                                        </form> 
                                        
                                   <!-- <button class="btn btn-success btn-xs">Delivery done</button>
                                   <button class="btn btn-primary btn-xs">hold</button>                                
                                   <button class="btn btn-info btn-xs">On the way</button> -->
                                </div>
                            </div>                            
                        </div>
        @endforeach
        @endisset




              
                        </div>
                    </div>
                </div>
            </div>

@endsection