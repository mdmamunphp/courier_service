@extends('admin.master')
@section('content')
<div class="container-fluid">
                <div class="row">
                    
                      @include('merchandise.sub_profile');
                      
                    <div class="col-lg-8 col-xl-9">                        
                     
                          @isset($product)
                           @foreach($product as $value)


                          <div class="col-lg-8 col-xl-9">
                            <div class="card">
                                <div class="card-body">
                                    
                                     <h5 class="card-title">চালান নাম্বার :{{$value->m_invoice_id}}</h5>
                                       <small>  মোট পণ্যের মূল্য  : {{$value->total_amount}} <br/>
                                       মোট পণ্যের পরিমান  :<?php $res=total_quantity($value->id); echo $res[0]->total_quantity;?></br>
                                       তারিখ : {{$value->created_at}}</br>
                                              <br/>
                                              <?php
                                              if($value->pickup_man_status==1){
                                                echo "<h5 style='color:green'> Pickup Done</h5>";
                                              }?>
                                       </small>                                      
                                       <form class="form-valide" align="right" action="{{ URL::to('m_p_send_agent_status/'.$value->id) }}" method="post">
                                            @csrf
                                            <input type="hidden" name="merchandise_status" value="1">                                           

                                            <input type="submit" class="btn btn-danger btn-xs" value="Product send Confirm">
                                        </form>       
                                    <div class="card-footer">
                                        <p class="card-text d-inline"><small class="text-muted"><b>Pickup Star</b> <br>
                                        <?php 
                                        $res=rollstar_details($value->agent_id);
                                        if($res==null){
                                            
                                            echo "undefine";
                                        }else{
                                             echo $res[0]->name;?><br><?php  echo $res[0]->phone;
                                        }
                                       ?> </small>
                                        </p><a href="{{ URL::to('m_all_product_details/'.$value->id) }}" class="card-link float-right"><small>Details Product</small></a>
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