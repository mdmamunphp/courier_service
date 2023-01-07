@extends('admin.master')
@section('content')
<div class="container-fluid">
                <div class="row">
                  @include('merchandise.sub_profile');
                    <div class="col-lg-8 col-xl-9">
                        <div class="card">
                            <div class="card-body" style="background: linear-gradient(to bottom, #ccff33 0%, #99ff99 100%);">
                                <h3 align="center" style="color:#4d004d"> Payment Status</h3>
                            </div>
                        </div>
                     
                          @isset($product)
                           @foreach($product as $value)







                          <div class="col-lg-8 col-xl-9">
                            <div class="card" style="background: linear-gradient(to bottom, #33ccff 0%, #ff99ff 100%)">
                            <!--<div class="card">-->
                                <div class="card-body">
                                    
                                
                                     <h5 class="card-title">চালান নাম্বার :{{$value->m_invoice_id}}</h5>
                                     <h6 style="color:red"> তারিখ : {{$value->created_at}}</h6>
                                       <small>
                                       মোট পণ্যের পরিমান : <?php $res=total_quantity($value->id); echo $res[0]->total_quantity;?></br>
                                       মোট পণ্যের মূল্য :{{$value->total_amount}} <br/>
                                       মোট ডেলিভারি মূল্য :<?php $delivery_amount=total_delivery_amount($value->id); echo $delivery_amount[0]->total_delivery_amount;?><br/>
                                              Rollexpress ডেলিভারি চার্জ:<?php $charge=total_service_charge($value->id); echo  $charge[0]->delivery_charge;?></br>
                                        
                                             

                                              <br/>
                                            
                                       </small>                   
                                     
                                  
                                  
                                        <a href="{{ URL::to('merchandise_p_profit_details/'.$value->id) }}" class="card-link float-right"><small>Payment Details</small></a>
                                    
                                </div>
                            </div>
                         </div>
                            @endforeach
                          @endisset                            
                   <!--extra design-->
                           <div class="col-lg-8 col-xl-9">
                            <div class="card" style="background: linear-gradient(to bottom, #33ccff 0%, #ff99ff 100%)">
                                <div class="card-body">
                                    
                                
                                     <h5 class="card-title">Invoice:</h5>
                                     
                                       <small>
                                              Total Quantity        :5</br>
                                              Total product Amount  :3000<br/>
                                              Total Service Charge  :60*2=120</br>
                                              Total Delivery Amount :1200<br/>
                                              Total Hold Amount     :600</br>
                                              Total Return Amount   :1200<br/>
                                              Total Return Charge   :80<br/>
                                              merchandise net amount:2400-80-120=2200</br>
                                              total paid amount     :2200=2200
                                              Rollexpress paid      :2000</br>
                                              Rollexpress due       :200</br>
                                       
                                       </small>                   
                                       
                                       <form>
                                            <input type="text" class="form-control" placeholder="paid amount">
                                            <input type="text"class="form-control" placeholder="due amount">
                                            <input type="submit" value="Send" placeholder="due amount">
                                       </form>
                                  
                                   
                                </div>
                            </div>
                         </div>
                            
                            
                            
                        
                       
                        </div>
                    </div>
                </div>
            </div>
           
         

@endsection