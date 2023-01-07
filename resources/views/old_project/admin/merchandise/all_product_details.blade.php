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
                                        <?php
                                        if($value->delivery_status==3){
                                            ?>
                                            <form class="form-valide" align="right" action="{{ URL::to('delivery__return_status/'.$value->id) }}" method="post">
                                            @csrf
                                            <input type="hidden" name="delivery_status" value="0">


                                            <select class="form-control" hidden id="val-skill" name="return_id">
                                                <option value="">রিটার্ন নির্বাচন করুন </option>
                                                @isset($return)
                                                @foreach($return as $val)
                                                <option value="0"></option>
                                                @endforeach
                                                @endisset
                                            </select>

                                            <input type="submit" class="btn btn-success btn-xs" value="unreturn">
                                        </form>  
                                        <?php
                                        }else{
                                            ?>
                                            <form class="form-valide" align="right" action="{{ URL::to('delivery__return_status/'.$value->id) }}" method="post">
                                            @csrf
                                            <input type="hidden" name="delivery_status" value="3">


                                            <select class="form-control" id="val-skill" name="return_id">
                                                <option value="">রিটার্ন নির্বাচন করুন</option>
                                                @isset($return)
                                                @foreach($return as $val)
                                                <option value="{{$val->id}}">{{$val->name}}</option>
                                                @endforeach
                                                @endisset
                                            </select>

                                            <input type="submit" class="btn btn-danger btn-xs" value="return">
                                        </form>  
                                       <?php }
                                       ?>
                                                               
                                  
                                    <div class="card-footer">
                                        <p class="card-text d-inline"><small class="text-muted"><?php $res=rollstar_details($value->agent_id);
                                          if($res==null){
                                            echo "undefine";
                                        }else{
                                            echo $res[0]->name;
                                            ?>
                                             </p><a href="#" class="card-link float-right"><small> <?php echo $res[0]->phone;?></small></a>
                                       <?php }
                                        ?></small>
                                       
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