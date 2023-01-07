@extends('admin.master')
@section('content')
<!-- @php
echo "total_p_amount =".$total_p_amount[0]->total_p_amount."</br>";
echo "total_delivery =".$total_delivery[0]->total_delivery."</br>";
echo "total_delivery_charge =".$total_delivery_charge[0]->total_delivery_charge."</br>";
echo "total_hold =".$total_hold[0]->total_hold."</br>";
echo "total_return =".$total_return[0]->total_return."</br>";
echo "total_return_charge =".$total_return_charge[0]->total_return_charge."</br>";
echo "return_recieved_amount =".$return_recieved_amount[0]->return_recieved_amount."</br>";

echo "rollexpress_paid =".$rollexpress_paid[0]->rollexpress_paid."</br>";
echo "merchandise_recieved_roll =".$merchandise_recieved_roll[0]->merchandise_recieved_roll."</br>";
echo "expenses =".$expenses[0]->expenses."</br>";
echo "investments =".$investments[0]->investments."</br>";
@endphp -->

<div class="container-fluid">
    <!-- row -->

    <div class="row">




<div class="col-lg-12 col-sm-12">
        <div class="card-body">

            <div class="bootstrap-modal">


            
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">get daily account</h5>
                               
                            </div>
                            <form action="{{ url('store_daily_accounts')}}" method="post">
                                @csrf
                                <div class="modal-body">

                                
                                <!-- <div class="form-group">
                                        <label for="total_p_quantity" class="col-form-label">Total New Product Quantity</label>
                                        <input type="text" class="form-control" value="{{$total_p_quantity[0]->total_p_quantity}}"name="total_p_quantity" 
                                            id="total_p_quantity">
                                    </div> -->
                                    <div class="form-group">
                                        <label for="total_p_amount" class="col-form-label">Total New Product Amount</label>
                                        <input type="text" class="form-control" value="{{$total_p_amount[0]->total_p_amount}}"name="total_p_amount" 
                                            id="total_p_amount">
                                    </div>
                                    <!-- <div class="form-group">
                                        <label for="total_delivery_quantity" class="col-form-label">Total Delivery quantity</label>
                                        <input type="text" class="form-control" value="{{$total_delivery_quantity[0]->total_delivery_quantity}}"name="total_delivery_quantity" 
                                            id="total_delivery_quantity">
                                    </div> -->

                                    <div class="form-group">
                                        <label for="total_delivery" class="col-form-label">Total Delivery Amount</label>
                                        <input type="text" class="form-control" value="{{$total_delivery[0]->total_delivery}}"name="total_delivery" 
                                            id="total_delivery">
                                    </div>
                                    <div class="form-group">
                                        <label for="total_delivery_charge" class="col-form-label">total_delivery_charge</label>
                                        <input type="text" class="form-control" value="{{$total_delivery_charge[0]->total_delivery_charge}}"name="total_delivery_charge" 
                                            id="total_delivery_charge">
                                    </div>
                                    <!-- <div class="form-group">
                                        <label for="total_hold_quantity" class="col-form-label">total_hold_quantity</label>
                                        <input type="text" class="form-control"value="{{$total_hold_quantity[0]->total_hold_quantity}}" name="total_hold_quantity" 
                                            id="total_hold_quantity">
                                    </div> -->
                                    <div class="form-group">
                                        <label for="total_hold" class="col-form-label">total_hold</label>
                                        <input type="text" class="form-control"value="{{$total_hold[0]->total_hold}}" name="total_hold" 
                                            id="total_hold">
                                    </div>
                                    <!-- <div class="form-group">
                                        <label for="total_return_quantity" class="col-form-label">total_return_quantity</label>
                                        <input type="text" class="form-control" value="{{$total_return_quantity[0]->total_return_quantity}}"name="total_return_quantity" 
                                            id="total_return_quantity">
                                    </div> -->
                                    <div class="form-group">
                                        <label for="total_return" class="col-form-label">total_return</label>
                                        <input type="text" class="form-control" value="{{$total_return[0]->total_return}}"name="total_return" 
                                            id="total_return">
                                    </div>
                                    <div class="form-group">
                                        <label for="total_return_charge" class="col-form-label">total_return_charge</label>
                                        <input type="text" class="form-control" value="{{$total_return_charge[0]->total_return_charge}}"name="total_return_charge" 
                                            id="total_return_charge">
                                    </div>
                                    <div class="form-group">
                                        <label for="return_recieved_amount" class="col-form-label">return_recieved_amount</label>
                                        <input type="text" class="form-control" value="{{$return_recieved_amount[0]->return_recieved_amount}}"name="return_recieved_amount" 
                                            id="return_recieved_amount">
                                    </div>
                                    <div class="form-group">
                                        <label for="rollexpress_paid" class="col-form-label">rollexpress_paid</label>
                                        <input type="text" class="form-control" value="{{$rollexpress_paid[0]->rollexpress_paid}}"name="rollexpress_paid" 
                                            id="rollexpress_paid">
                                    </div>
                                    <div class="form-group">
                                        <label for="merchandise_recieved_roll" class="col-form-label">merchandise_recieved_roll</label>
                                        <input type="text" class="form-control" value="{{$merchandise_recieved_roll[0]->merchandise_recieved_roll}}"name="merchandise_recieved_roll" 
                                            id="merchandise_recieved_roll">
                                    </div>
                                    <div class="form-group">
                                        <label for="expenses" class="col-form-label">Total expenses</label>
                                        <input type="text" class="form-control" value="{{$expenses[0]->expenses}}"name="expenses" 
                                            id="expenses">
                                    </div>
                                    <div class="form-group">
                                        <label for="investments" class="col-form-label">Total investments</label>
                                        <input type="text" class="form-control" value="{{$investments[0]->investments}}"name="investments" 
                                            id="investments">
                                    </div>
                                    <div class="form-group">
                                        <label for="end_balance" class="col-form-label">End Cash Balance </label>
                                        <input type="text" class="form-control" name="end_cash_balance" 
                                            id="end_balance">
                                    </div>
                                    
                                
                                </div>
                                <div class="modal-footer">
                              
                                    <button type="submit" class="btn btn-primary">বার্তা পাঠান</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
    </div>

      










 




    </div>
</div>
<!-- #/ container -->



@endsection