@extends('admin.master')
@section('content')
<div class="container-fluid">
                <div class="row">
                  
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
                                    
                                
                                     <h5 class="card-title">Invoice:{{$value->m_invoice_id}}</h5>
                                     <h6 style="color:red"> Date: {{$value->created_at}}</h6>
                                       <small>
                                              Total Quantity: <?php $res=total_quantity($value->id); echo $res[0]->total_quantity;?></br>
                                              Total Product Amount:{{$value->total_amount}} <br/>
                                              Total Service Charge:<?php $charge=total_service_charge($value->id); echo  $charge[0]->delivery_charge;?></br>
                                              Total Delivery Amount :<?php $delivery_amount=total_delivery_amount($value->id); echo $delivery_amount[0]->total_delivery_amount;?><br/>
                                              Total Hold Amount     :<?php $hold_amount=total_hold_amount($value->id); echo $hold_amount[0]->total_hold_amount;?></br>
                                              Total Return Amount   :<?php $return_amount=total_return_amount($value->id); echo $return_amount[0]->total_return_amount;?><br/>
                                              Total Return Charge   :<?php $return_charge=total_return_charge($value->id); echo $return_charge[0]->return_charge;?><br/>
                                              Merchandise Amount    :{{$delivery_amount[0]->total_delivery_amount+$return_amount[0]->total_return_amount}}<br/>
                                              Total Roll Express Charge:{{$charge[0]->delivery_charge+$return_charge[0]->return_charge}}<br/>
                                              Merchandise Net Amount:<?php
                                              $net_amount=$delivery_amount[0]->total_delivery_amount+$return_amount[0]->total_return_amount-$charge[0]->delivery_charge-$return_charge[0]->return_charge;?>
                                              
                                              {{$net_amount}}<br/>
                                              Rollexpress Paid      : {{$value->rollexpress_paid}}
                                
                                 

                                              <br/>
                                              Rollexpress Due       :{{$net_amount-$value->rollexpress_paid}}<br/>
                                       </small>                   
                                       
                                       <form action="{{URL::to('rollexpress_paid/'.$value->id)}}" method="post">
                                           @csrf
                                            <input type="hidden" class="form-control" value="{{$value->rollexpress_paid}}" name="rollexpress_paid_old"placeholder="paid amount">
                                            <input  type="text" class="form-control" name="rollexpress_paid"placeholder="paid amount">
                                            <input type="submit" value="Send" class="btn btn-primary" >
                                       </form>
                                  
                                    <div class="card-footer">
                                        <p class="card-text d-inline"><small class="text-muted" style="color:#cc33ff"><?php $r=rollstar_details($value->agent_id);
                                            if($r==null){
                                                echo "Undefine";
                                            }else{
                                                echo $r[0]->name;
                                            }
                                        
                                        
                                      ?> </small>
                                        </p><a href="{{ URL::to('payment_details/'.$value->id) }}" class="card-link float-right"><small>Payment Status</small></a>
                                    </div>
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