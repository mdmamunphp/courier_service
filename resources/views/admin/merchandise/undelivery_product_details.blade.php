@extends('admin.master')
@section('content')
<div class="container-fluid">
    <div class="row">

        <div class="col-lg-8 col-xl-9">


            @isset($result)
            @foreach($result as $value)


            <div class="col-lg-8 col-xl-9">
                <div class="card">
                    <div class="card-body">
                    
                    <a href="{{ URL::to('delivery_invoice/'.$value->id)}}" target="_blank" style="float:right"><i class="fa fa-print"></i> Print Invoice </a>
                    <!-- <a href="{{ URL::to('edit_product_details/'.$value->id)}}" target="_blank" style="float:right;padding-right:2%"><i class="fa fa-pencil color-muted m-r-5"></i> Edit </a> -->
                        <h5 class="card-title">চালান নাম্বার:{{$value->admin_invoice_id}}</h5>
                        <small style="color:red">Date:
                        
                        @php
                                        $startdate=strtotime($value->created_at);
                                            echo date("M d",  $startdate) ." , ";
                                            echo date("Y",  $startdate);
                                     
                                        @endphp 
                        
                        </small> <br />
                        @if($value->urgent_delivery==1)
                        <b style="color:red">Urgent Delivery </b>
                        @endif
                        
                        <br />
                        <small>কাস্টমার নাম : {{$value->customer_name}} <br />
                            কাস্টমার মোবাইল : {{$value->customer_phone}} <br />
                            ডেলিভারির ঠিকানা : {{$value->customer_address}} <br />

                            পার্সেলটির মূল্য :
                            <?php
                                              if($value->customer_paid==1){
                                                    echo "<h5 style='color:red'>Paid</h5>";
                                              }else{
                                                  echo $value->product_price;
                                              }
                                              ?></br>
                            ডেলিভারি চার্জ : {{$value->delivery_charge}}</br>
                            মার্চেন্ট নগদ পাবে: {{$value->product_price-$value->delivery_charge}} <br />

                        </small><br>



                        <div class="card-footer">
                            <p class="card-text d-inline"><small class="text-muted"><?php $res=rollstar_details($value->agent_id);
                                          if($res==null){
                                            echo "undefine";
                                        }else{
                                            echo $res[0]->name."<br>";
                                            echo $res[0]->phone
                                            ?>

                                    <?php }
                                        ?></small> </p>


                            <!-- <p class="card-text d-inline"><small class="text-muted">Roll Star Add</p> -->
                            <a href="{{ URL::to('delivery_agent_add/'.$value->id) }}" class="card-link float-right"
                                style="color:red"><small>এজেন্ট যুক্ত করুন</small></a>
                            </small>

                        </div>
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