@extends('admin.master')
@section('content')
<div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="media align-items-center mb-4">
                                    <img class="mr-3" src="{{ asset('public/asset/images/avatar/11.png')}}" width="80" height="80" alt="">
                                    <div class="media-body">
                                        <h3 class="mb-0">Merchandis</h3>
                                        <p class="text-muted mb-0">Canada</p>
                                    </div>
                                </div>
                                
                                

                                <!--<h4>About Me</h4>-->
                                <!--<p class="text-muted">Hi, I'm Pikamy, has been the industry standard dummy text ever since the 1500s.</p>-->
                               
                                <ul class="card-profile__info">
                                    <li class="mb-1"><strong class="text-dark mr-4">Mobile</strong> <span>01793931609</span></li>
                                    <li><strong class="text-dark mr-4">Email</strong> <span>name@domain.com</span></li>
                                </ul>
                            </div>
                        </div>  
                    </div>
                    <div class="col-lg-8 col-xl-9">
                       
                     
                          @isset($result)
                           @foreach($result as $value)


                          <div class="col-lg-8 col-xl-9">
                            <div class="card">
                                <div class="card-body">
                                    
                                     <h5 class="card-title">Invoice:{{$value->admin_invoice_id}}</h5>
                            
                                       <small>Customer Name: {{$value->customer_name}} <br/>     
                                              Customer Phone: {{$value->customer_phone}} <br/>    
                                              Customer Address: {{$value->customer_address}} <br/>      
                                              product price: {{$value->product_price-$value->delivery_charge}} <br/>                                             
                                              Service Charge: {{$value->delivery_charge}}</br>
                                              Total Amount:{{$value->product_price}}</br>
                                              
                                              delivery status:  <?php if($value->delivery_status==3){
                                                echo "<h5 style='color:red'>Product Return</h5>";
                                            }else if($value->delivery_status==2){
                                                echo "<h5 style='color:blue'>Product Hold</h5>";
                                            }elseif ($value->delivery_status==1) {
                                                echo "<h5 style='color:green'>Delivery Done</h5>";
                                            }elseif ($value->delivery_status==4){
                                                echo "<h5 style='color:#ff8c1a'>On The Way</h5>";
                                            }else{
                                                echo "<h5 style='color:#6600ff'>Pending</h5>";
                                            };?><br>
                                            <b>Agent Account Status:</b>
                                            <?php
                                            if($value->admin_recieve_agent_status==1){
                                                echo "<h5 style='color:green'>Done</h5>";
                                            }
                                            
                                        ?>
                                        
                                            
                                            <br>
 
                                              <?php
                                              if($value->payment_status==0){
                                                  ?>
                                                  <form class="form-valide" align="right" action="{{ URL::to('merchandise_payment/store/'.$value->id) }}" method="post">
                                                       @csrf
                                                    <input type="hidden" name="payment_status" value="1">
                                                    <input type="submit"class="btn btn-danger" value="Unpaid">
                                                 </form>
                                              <?php
                                              }else{
                                                  ?>
                                            <form class="form-valide" align="right" action="{{ URL::to('merchandise_payment/store/'.$value->id) }}" method="post">
                                                       @csrf
                                                    <input type="hidden" name="payment_status" value="0">
                                                    <input type="submit"class="btn btn-primary" value="Paid">
                                                 </form>
                                                  <?php
                                              }
                                            ?>
                                       </small>                                     
                                    
                                    <div class="card-footer">
                                        <p class="card-text d-inline"><small class="text-muted"><?php $res=rollstar_details(3); echo $res[0]->name; ?></small>
                                        </p><a href="#" class="card-link float-right"><small> <?php echo $res[0]->phone;;?></small></a>
                                        
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