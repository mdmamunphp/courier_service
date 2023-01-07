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
                                    
                                
                                     <h5 class="card-title">চালান নাম্বার :{{$value->admin_invoice_id}}</h5>
                                       <small>
                                              কাস্টমার এর নাম : {{$value->customer_name}} <br/>     
                                              কাস্টমার এর মোবাইল নাম্বার : {{$value->customer_phone}} <br/>    
                                              ডেলিভারির ঠিকানা : {{$value->customer_address}} <br/>      
                                              পার্সেলটির মূল্য :
                                              <?php
                                              if($value->customer_paid==1){

                                                    echo "<h5 style='color:red'>Paid</h5>";

                                              }else{

                                                  echo $value->product_price;
                                              }
                                              ?>
                                              <br/>                                             
                                                  ডেলিভারি চার্জ : {{$value->delivery_charge}}</br>                                            
                                              <b> ডেলিভারি অবস্থা : </b> <?php if($value->delivery_status==3){
                                                echo "<h5 style='color:red'>পার্সেলটি রিটার্ন করা হয়েছে।</h5>";
                                            }else if($value->delivery_status==2){
                                                echo "<h5 style='color:blue'>পার্সেলটি হোল্ড রাখা হয়েছে।</h5>";
                                            }elseif ($value->delivery_status==1) {
                                                echo "<h5 style='color:green'>পার্সেলটি ডেলিভারি সম্পন্ন হয়েছে।</h5>";
                                            }elseif ($value->delivery_status==4){
                                                echo "<h5 style='color:green'>আপনার পার্সেলটির জন্য রওনা দিয়েছে।</h5>";
                                              }else{
                                                echo "<h5 style='color:skyblue'>পন্যটি প্রক্রিয়াধীন আছে।</h5>";
                                              };?><br>
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