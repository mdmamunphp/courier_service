@extends('admin.master')
@section('content')
<div class="container-fluid">
                <div class="row">
                   @include('merchandise.sub_profile');
                   
                    <div class="col-lg-8 col-xl-9">                        
                     
                          @isset($product)
                           @foreach($product as $value)


                          <!-- <div class="col-lg-8 col-xl-9">
                            <div class="card">
                                <div class="card-body">
                                    
                                
                                     <h5 class="card-title">Invoice:{{$value->m_invoice_id}}</h5>
                                       <small>Total Amount:{{$value->total_amount}} <br/>
                                              Total Quantity:</br>
                                              Total Service Charge:</br>
                                              delivery product :{{$value->total_amount}}<br/>
                                              return product   :{{$value->total_amount}}<br/>
                                              hold product     :
                                       </small>                                     
                                  
                                    <div class="card-footer">
                                        <p class="card-text d-inline"><small class="text-muted">Last updated </small>
                                        </p><a href="{{ URL::to('m_all_product_details/'.$value->id) }}" class="card-link float-right"><small>Details Product</small></a>
                                    </div>
                                </div>
                            </div>
                         </div> -->
                            @endforeach
                          @endisset                            
                            
                        
                       
                        </div>
                    </div>
                </div>
            </div>

@endsection