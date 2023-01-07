@extends('admin.master')
@section('content')
<div class="container-fluid">
<style>
@media print
{
  .button
  {
    display: none;
  }
}
</style>
                <div class="row">
                  
                    <div class="col-lg-8 col-xl-9" class="print">
                        <div class="card">
                            <div class="card-body" style="background: linear-gradient(to bottom, #ccff33 0%, #99ff99 100%);">
                                <h3 align="center" style="color:#4d004d"> Payment Status</h3>
                            </div>
                        </div>
                     
                          @isset($product)
                           @foreach($product as $value)







                          <div class="col-lg-8 col-xl-9">
                            <!-- <div class="card" style="background: linear-gradient(to bottom, #33ccff 0%, #ff99ff 100%)"> -->
                            <div class="card">
                                <div class="card-body">
                                    
                                <a href="{{ URL::to('admin_merchandise_invoice/'.$value->id)}}" target="_blank" style="float:right"><i class="fa fa-print"></i> Print Invoice </a>
                                
                                     <h5 class="card-title">চালান নাম্বার : {{$value->m_invoice_id}}</h5>
                                     <h6 style="color:red"> তারিখ :    
                                      @php
                                        $startdate=strtotime($value->created_at);
                                            echo date("M d",  $startdate) ." , ";
                                            echo date("Y",  $startdate);
                                     
                                        @endphp     </h6>

                                    
                                        <br/>  
                                       <small>
                                       মোট পণ্যের পরিমান : <?php $res=total_quantity($value->id); echo $res[0]->total_quantity;?></br>
                                       মোট পণ্যের মূল্য  : {{$value->total_amount}} <br/>                                           
                                       মোট ডেলিভারি মূল্য  :<?php $delivery_amount=total_delivery_amount($value->id); echo $delivery_amount[0]->total_delivery_amount;?><br/>
                                       মোট  সার্ভিস চার্জ :<?php $charge=total_service_charge($value->id); echo  $charge[0]->delivery_charge;?></br>
                                       মোট হোল্ড মূল্য  :<?php $hold_amount=total_hold_amount($value->id); echo $hold_amount[0]->total_hold_amount;?></br>
                                       মোট রিটার্ন পণ্য   :<?php $return_amount=total_return_amount($value->id); echo $return_amount[0]->total_return_amount;?><br/>
                                       মোট রিটার্ন সার্ভিস চার্জ  :<?php $return_charge=total_return_charge($value->id); echo $return_charge[0]->return_charge;?><br/>
                                      মার্চেন্ট মোট পরিশোধনীয় টাকা  : {{$delivery_amount[0]->total_delivery_amount+$return_amount[0]->total_return_amount}}<br/>
                                              মোট Roll Express চার্জ :{{$charge[0]->delivery_charge+$return_charge[0]->return_charge}}<br/>
                                              মার্চেন্ট নেট মূল্য :<?php
                                              $net_amount=$delivery_amount[0]->total_delivery_amount+$return_amount[0]->total_return_amount-$charge[0]->delivery_charge-$return_charge[0]->return_charge;?>
                                              
                                              {{$net_amount}}<br/>
                                              Rollexpress Paid    : {{$value->rollexpress_paid}}
                                
                                 

                                              <br/>
                                              Rollexpress Due       :{{$net_amount-$value->rollexpress_paid}}<br/>
                                       </small>                   
                                       
                                       <form action="{{URL::to('rollexpress_paid/'.$value->id)}}" method="post">
                                           @csrf
                                            <input type="hidden" class="form-control" value="{{$value->rollexpress_paid}}" name="rollexpress_paid_old"placeholder="paid amount">
                                            <input  type="hidden" class="form-control" value="{{$value->user_id}}" name="merchandise_id">
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
                                    <!-- <input style="padding:5px;" class="button"value="Print Document" type="button" onclick="myFunction()"></input> -->
                                    <!-- <a href="{{url('invoice')}}" class="card-link float-right">print</a> -->
                                    <!-- <a href="{{url('invoice')}}" target="_blank" class="btn btn-primary"><i class="fa fa-print"></i> Print Invoice </a> -->
                                </div>
                              
                            </div>
                         </div>
                            @endforeach
                          @endisset                            
                 
             
                            
                       
                        
                       
                        </div>
                    </div>
                </div>
            </div>
           
        
                                <script>
                                    function myFunction()
                                    {
                                        window.print();
                                    }
                                </script>

@endsection