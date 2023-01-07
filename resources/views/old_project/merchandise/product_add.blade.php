@extends('admin.master')
@section('content')
<div class="container-fluid">
    <!-- row -->

    <div class="row">

  @include('merchandise.sub_profile');
                       
        <div class="card-body">
 
            <div class="bootstrap-modal">


                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">পার্সেল নিবন্ধন ফর্ম</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                        aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="{{ url('merchandis/product_add')}}" method="post">
                                @csrf
                                <div class="modal-body">
                                            
                                    <!-- <div class="form-group">
                                        <label for="invoice-id" class="col-form-label">invoice id:</label>
                                        <input type="text" class="form-control" name="invoice_id" id="invoice-id">
                                    </div> -->
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">কাস্টমার নাম :</label>
                                        <input type="text" class="form-control" name="customer_name" id="recipient-name">
                                      
                                    </div>
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">ডেলিভারির ঠিকানা :</label>
                                        <input type="text" class="form-control" name="customer_address" id="recipient-name">
                                    </div>
                                     <div class="form-group">
                                        <label for="phone-text" class="col-form-label">কাস্টমার এর মোবাইল নাম্বার :</label>
                                   
                                        <input type="number" class="form-control" name="phone" id="phone-name" required>
                                    </div>
                                 
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">পার্সেলটির মূল্য :</label>
                                        <input type="number" class="form-control" name="product_price" id="recipient-name">
                                    </div>
                                       <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Rollexpress ডেলিভারি চার্জ :</label>
                                        <input type="number" class="form-control" name="delivery_charge" id="recipient-name">
                                    </div>
                                   <div class="col-lg-6">
                                           
                                     <input type="checkbox" class="form-check-input" id="paid" name="customer_paid" value="1"><span> পেইড</span>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">বাদ দিন</button>
                                    <button type="submit" class="btn btn-primary">বার্তা পাঠান</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

   
      
        <div class="col-lg-12 col-sm-12">
            <div class="card">
                <div class="card-body">
                    <!-- <h4 class="card-title">Responsive Table</h4> -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
                        data-whatever="@getbootstrap">পার্সেল যুক্ত করুন</button>
                                @error('phone')
                <h6 style="color:red"> Phone Number is not valid</h6>
              
                      @enderror          
                    <div class="table-responsive">
                        <table class="table header-border">
                            
                        @if(session('cart'))
                            <thead>
                                <tr>
                                    <!-- <th>Invoice</th> -->
                                    <th>নং</th>
                                    <th>কাস্টমার নাম </th>
                                    <th>ডেলিভারির ঠিকানা</th>
                                    <th>পার্সেলটির মূল্য</th>
                                    <th>কাস্টমার মোবাইল</th>
                                    <!-- <th>Status</th> -->
                                </tr>
                            </thead>
                            <tbody>
                              
                                <?php $total = 0 ; $si=0;?>
                                @foreach(session('cart') as $id => $cat)


                                <?php $total +=$cat['product_price']; $si++;?>




                                <tr>
                                <td>{{$si}}</td>
                                <td>{{ $cat['customer_name'] }}</td>
                                  <td>{{ $cat['customer_address'] }}</td>
                                <td><span class="text-muted">{{ $cat['product_price'] }}</span>                </td>
                                   <td>{{ $cat['phone'] }}</td>
                                   
                                  
                                    <!-- <td><span class="label gradient-1 rounded">Paid</span>
                                    </td> -->

                                </tr>
                                

                                @endforeach
                               
                                <tr>
                                    <td></td>
                                    <td><b>Total Amount :</b></td>
                                    <td>{{$total}} </td>
                                </tr>

                                <tr>
                                    <td><form action="{{url('cancel_product_add')}}" method="get">@csrf<button type="submit" class="btn btn-danger">বাদ দিন</button></form></td>
                                    <td><form action="{{url('merchandis/store')}}" method="post">@csrf
                                    <input type="hidden" value="{{$total}}" name="total_amount">
                                    <button type="submit" class="btn btn-success">বার্তা পাঠান</button></td>
                                </tr>
                             
                            </tbody>
                            @endif
                        </table>
                    </div>
                </div>
            </div>
        </div>
       
                 
                                 
                  
               
              



               <div class="col-lg-8 col-xl-9">                        
                     
                     @isset($product)
                      @foreach($product as $value)


                     <div class="col-lg-8 col-xl-9">
                       <div class="card">
                           <div class="card-body">
                               
                           
                                <h5 class="card-title">Invoice:{{$value->m_invoice_id}}</h5>
                                  <small>Total Amount:{{$value->total_amount}} <br/>
                                         Total Quantity:<?php $res=total_quantity($value->id);echo $res[0]->total_quantity;?></br>
                                         Total Service Charge:</br> 
                                         <!--delivery product :{{$value->total_amount}}<br/>-->
                                         <!--return product   :{{$value->total_amount}}<br/>-->
                                         <!--hold product     :-->
                                  </small>                                     
                             
                               <div class="card-footer">
                                   <p class="card-text d-inline"><small class="text-muted">{{$value->created_at}} </small>
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
<!-- #/ container -->
@endsection