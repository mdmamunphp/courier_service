@extends('admin.master')
@section('content')
<div class="container-fluid">
    <div class="row">
        @isset($merchandise)
        <!-- <div class="col-lg-4 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="media align-items-center mb-4">
                                    <img class="mr-3" src="{{$merchandise[0]->images}}" width="80" height="80" alt="">
                                    <div class="media-body">
                                        <h3 class="mb-0">{{$merchandise[0]->name}}</h3>
                                        <p class="text-muted mb-0">{{$merchandise[0]->address}}</p>
                                    </div>
                                </div>
                                
                                </div>

                                <h4>About Me</h4>
                                <p class="text-muted">Hi, I'm Pikamy, has been the industry standard dummy text ever since the 1500s.</p>
                                <ul class="card-profile__info">
                                    <li class="mb-1"><strong class="text-dark mr-4">Mobile</strong> <span>{{$merchandise[0]->phone}}</span></li>
                                    <li><strong class="text-dark mr-4">Email</strong> <span>{{$merchandise[0]->email}}</span></li>
                                </ul>
                            </div>
                        </div>  
                    </div> -->
        @endisset
        @isset($product)
        @foreach($product as $value)


        <div class="col-lg-8 col-xl-9">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">চালান নাম্বার :{{$value->m_invoice_id}}</h5>
                    <p style="color:red"><b>তারিখ :</b>
                    @php
                                        $startdate=strtotime($value->created_at);
                                            echo date("M d",  $startdate) ." , ";
                                            echo date("Y",  $startdate);
                                     
                                        @endphp 
                     </p>
                    <small>
                        মোট পণ্যের মূল্য :{{$value->total_amount}} <br />
                        মোট পণ্যের পরিমান : <?php $res=total_quantity($value->id); echo $res[0]->total_quantity;?></br>
                        মোট ডেলিভারি চার্জ 
                        :<?php $res=total_service_charge($value->id); echo $res[0]->delivery_charge;?></br>
                        মার্চেন্ট নগদ পাবে:{{$value->total_amount-$res[0]->delivery_charge}}<br />
                        মোট ডেলিভারি পণ্য
                        :<?php $res=total_delivery_quantity($value->id); echo $res[0]->total_delivery_quantity;?><br />
                        মোট রিটার্ন পণ্য
                        :<?php $res=total_return_quantity($value->id); echo $res[0]->total_return_quantity;?><br />
                        মোট হোল্ড পণ্য
                        :<?php $res=total_hold_quantity($value->id); echo $res[0]->total_hold_quantity;?></br>
                    </small>

                    <div class="card-footer">
                        <p class="card-text d-inline"><small class="text-muted" style="color:#cc33ff"><?php $r=rollstar_details($value->agent_id);
                                    
                                            if($r==null){
                                                echo "undefine";
                                            }else{
                                                echo $r[0]->name;
                                            }
                                        
                                        
                                      ?> </small>
                        </p><a href="{{ URL::to('admin_m_delivery_p_details/'.$value->id) }}"
                            class="card-link float-right"><small>পন্যের বিবরণ</small></a>
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