@extends('admin.master')
@section('content')
<div class="container-fluid">
    <div class="row">
 
    


        @isset($product)
        @foreach($product as $value)
        <div class="col-lg-8 col-xl-9">
               
            <div class="card">
                <div class="card-body">
                    <small>
                        <!-- <b>urgant delivery:</b> -->
                        <?php
                        if($value->urgent_delivery==1){
                            echo "<h5 style='color:red'>আর্জেন্ট ডেলিভারি </h5>";
                        } 
                        
                     ?><br>
                         <p style="color:red"><b>তারিখ :</b> {{$value->created_at}}</p>
                        <b>চালান নাম্বার : </b>{{$value->admin_invoice_id}}<br>
                        <b>কাস্টমার নাম : </b>{{$value->customer_name}}<br>
                        <b>ডেলিভারির ঠিকানা : </b>{{$value->customer_address}}<br>
                        <b>কাস্টমার  মোবাইল নাম্বার : </b>{{$value->customer_phone}}<br> 
                        <!-- <b>merchandise name:</b><br> -->                    
                        <!-- <b>product name:</b><br> -->
                        <b>পার্সেলটির মূল্য : {{$value->product_price}}</b><br>
                        <!-- <b>delivery charge:</b><br> -->
                        <!-- <b>total amount:</b><br> -->
                        <b>মার্চেন্ট নাম  : </b>
                        <?php
                        $mer=merchandise_delivery_details($value->merchandise_product_id);
                     //  print_r($mer);
                      echo $mer[0]->name;
                        
                        ?>
                          <br>
                        <b>মার্চেন্ট মোবাইল : </b>
                        <?php
                  
                     //  print_r($mer);
                      echo $mer[0]->phone;
                        
                        ?>
                        
                        
                        <br>
                        <b>পার্সেলটির অবস্থা : </b> <?php if($value->delivery_status==3){
                            echo "<h5 style='color:red'>পার্সেলটি রিটার্ন করা হচ্চে।</h5>";
                        }else if($value->delivery_status==2){
                            echo "<h5 style='color:blue'>পার্সেলটি হোল্ড রাখা হয়েছে।</h5>";
                        }elseif ($value->delivery_status==1) {
                            echo "<h5 style='color:green'>পার্সেলটি ডেলিভারি সম্পন্ন হয়েছে।</h5>";
                        }elseif ($value->delivery_status==4){
                            echo "<h5 style='color:#ff8c1a'>আপনার পার্সেলটির জন্য রওনা দিয়েছে।</h5>";
                        }else{
                            echo "<h5 style='color:#6600ff'>পন্যটি প্রক্রিয়াধীন আছে।</h5>";
                        };?><br>
                          <b>এজেন্ট পার্সেল লেনদেন :</b>
                          <?php
                        if($value->admin_recieve_agent_status==1){
                            echo "<h5 style='color:green'>হিসাব সম্পন্ন হয়েছে</h5>";
                            ?>
                              <br>
                        
                        <form class="form-valide" align="right" action="{{ URL::to('admin_agent_account_close/'.$value->id) }}" method="post">
                           @csrf
                           <input type="hidden" name="admin_recieve_agent_status" value="0">
   
                           <input type="submit" class="btn btn-danger btn-xs" value="হিসাব প্রক্রিয়াধীন আছে">
                       </form>
                       <?php
                        }else{
                            echo "<h5 style='color:red'>হিসাব প্রক্রিয়াধীন আছে</h5>";
                            ?>
                              
                          <br>
                        
                        <form class="form-valide" align="right" action="{{ URL::to('admin_agent_account_close/'.$value->id) }}" method="post">
                           @csrf
                           <input type="hidden" name="admin_recieve_agent_status" value="1">
   
                           <input type="submit" class="btn btn-success btn-xs" value="হিসাব সম্পন্ন হয়েছে">
                       </form>
                       <?php
                        }
                        
                     ?>
                        <?php 
                  if($value->delivery_status==3){
                      ?>
                 <h6>Return Details</h6>
              
                      <?php
                 $return_details=return_histories_details($value->id); 
                    if($return_details==null){
                        echo "undefine";
                    }else{

                        echo   "<b>Return Reason:</b>".$return_details[0]->name. "</br>";
                        echo  "<b>Return Charge:</b>".$return_details[0]->return_charge. "</br>";
                        echo  "<b>Return Quantity:</b>".$return_details[0]->return_quantity. "</br>";
                    ?>
                    
                    <form class="form-valide" align="right" action="{{ URL::to('delivery__return_reject/'.$value->id) }}" method="post">
                        @csrf
                           <input type="hidden" name="delivery_status" value="0">
                           <input type="hidden" name="return_id" value="0">
                        <input type="hidden" name="m_p_details_id" value="{{$value->id}}">
                        <input type="submit" class="btn btn-danger btn-xs" value="Return reject">
                    </form>
                    
                    <form class="form-valide" align="right" action="{{ URL::to('delivery__return_status/'.$value->id) }}" method="post">
                        @csrf
                        <input type="hidden"  name="delivery_status" value="3">
                        <input type="hidden"  name="m_p_details_id" value="{{$value->id}}">
                         <input type="hidden" name="return_histories_id" value="{{$return_details[0]->id}}">
                        <input type="text"    name="return_charge" value="{{$return_details[0]->return_charge}}"class="form-control" placeholder="Enter Your Delivery Charge">
                        <input type="text"    name="return_quantity" value="{{$return_details[0]->return_quantity}}"class="form-control" placeholder="Enter Your quantity">
                        <input type="text"   name="return_recieved_amount" value="{{$return_details[0]->return_recieved_amount}}" class="form-control" placeholder="Enter Your recieved amount">


                        <select class="form-control" id="val-skill" value={{$return_details[0]->return_id}} name="return_id">
                            <option value={{$return_details[0]->return_id}}>return item select</option>
                            @isset($return)
                            @foreach($return as $val)
                            <option value="{{$val->id}}">{{$val->name}}</option>
                            @endforeach
                            @endisset
                        </select>

                        <input type="submit" class="btn btn-success btn-xs" value="Product Return">
                    </form>
                    
                    
                    
                    
                    <?php
                    
                    }
                  }else{
                      ?>
                       <form class="form-valide" align="right" action="{{ URL::to('delivery__return_status/'.$value->id) }}" method="post">
                        @csrf
                        <input type="hidden"  name="delivery_status" value="3">
                        <input type="hidden"  name="m_p_details_id" value="{{$value->id}}">
                         <input type="hidden" name="return_histories_id" >
                        <input type="text"    name="return_charge" class="form-control" placeholder="Enter Your Delivery Charge">
                        <input type="text"    name="return_quantity" class="form-control" placeholder="Enter Your quantity">
                        <input type="text"   name="return_recieved_amount" class="form-control" placeholder="Enter Your recieved amount">


                        <select class="form-control" id="val-skill"  name="return_id">
                            <option>return item select</option>
                            @isset($return)
                            @foreach($return as $val)
                            <option value="{{$val->id}}">{{$val->name}}</option>
                            @endforeach
                            @endisset
                        </select>

                        <input type="submit" class="btn btn-success btn-xs" value="Product Return">
                    </form>
                    
                    <?php
                  }
                 
               ?>
                
                 
                    </small>
                    
                    
                    
                    
                   

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