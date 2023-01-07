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
                                        <?php 
                                        
                                        if($value->roll_express_status==1){
                                            echo "Not Available product";
                                        }else{
                                            
                                        ?>
                                       
                                           <b>চালান নাম্বার:</b>{{$value->m_invoice_id}}<br>
                                           <!--<b>Merchandise Name: </b> <?php $res=rollstar_details($value->user_id);echo $res[0]->name;?><br>-->
                                           <!--<b>Merchandise phone: </b> <?php echo $res[0]->phone;?><br>-->
                                           <!--<b>merchandise address: </b> <?php echo $res[0]->address;?><br>-->
                                         
                                           
                                           <b>Total amount :</b>{{$value->total_amount}}<br>
                                           <b>   মোট পণ্যের পরিমান :</b><?php $res=total_quantity($value->id); echo $res[0]->total_quantity;?><br>
                                           মার্চেন্ট পার্সেল অবস্থা:</br>
                                              <?php
                                              if($value->merchandise_status==1){
                                                echo "<h5 style='color:green'> Product send</h5>";
                                              }?>
                                       </small> 
                                       <?php
                                       if($value->pickup_man_status==1){
                                           ?>
                                            <form class="form-valide" align="right" action="{{ URL::to('a_p_recieve_merchandise_status/'.$value->id) }}" method="post">
                                            @csrf
                                            <input type="hidden" name="pickup_man_status" value="0">                                           

                                            <input type="submit" class="btn btn-danger btn-xs" value="Reject">
                                        </form>  
                                        <?php
                                       }else{
                                           ?>
                                            <form class="form-valide" align="right" action="{{ URL::to('a_p_recieve_merchandise_status/'.$value->id) }}" method="post">
                                            @csrf
                                            <input type="hidden" name="pickup_man_status" value="1">                                           

                                            <input type="submit" class="btn btn-success btn-xs" value="Pickup done">
                                        </form>  
                                      <?php }
                                      ?>
                                          
                                    </small><br>
                                   <!-- <button class="btn btn-success btn-xs">Pickup done</button> -->
                                   <?php
                                   
                                        }
                                        ?>
                                        
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