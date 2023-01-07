@extends('admin.master')
@section('content')
<div class="container-fluid">
    <!-- row -->

    <div class="row">



        <div class="card-body">

            <div class="bootstrap-modal">


                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">খরচ নিবন্ধন ফর্ম</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                        aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="{{ url('expense')}}" method="post">
                                @csrf
                                <div class="modal-body">

                                  
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">খরচের নাম:</label>
                                        <input type="text" class="form-control" name="name"
                                            id="recipient-name">
                                    </div>
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">টাকা :</label>
                                        <input type="number" class="form-control" name="amount"
                                            id="recipient-name">
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
        <div class="card-body">

            <div class="bootstrap-modal">


            
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">get daily account</h5>
                               
                            </div>
                            <form action="{{ url('get_daily_accounts')}}" method="post">
                                @csrf
                                <div class="modal-body">

                                
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Date</label>
                                        <input type="text" class="form-control" name="daily_date" placeholder="Year-Month-Date exmaple: 2020-10-05"
                                            id="recipient-name">
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

        <div class="col-lg-12 col-sm-12">
            <div class="card">
                <div class="card-body">
                    <!-- <h4 class="card-title">Responsive Table</h4> -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
                        data-whatever="@getbootstrap">খরচ যুক্ত করুন</button>
                    <div class="table-responsive">
                        <table class="table header-border">
                            @isset($results)
                            <thead>
                                <tr>
                                    <!-- <th>Invoice</th> -->
                                    <th>No</th>
                                    <th>Admin Name</th>
                                    <th>Product Amount </th>   
                                    <!-- <th>Quantity </th>                                -->
                                    <th>Delivery Amount</th>
                                    <th>Delivery charge </th>
                                    <th>Hold </th>                                 
                                    <th>Return</th>
                                    <th>Return charge</th>
                                    <th>Return recieved amount </th>                                 
                                    <th>Rollexpress paid</th>
                                    <th>Merchandise recieved roll </th>
                                    <th>Expenses </th>                                 
                                    <th>Investments</th>
                                    <th>End cash balance</th>
                                    <th>Date</th>                                 
                                 
                                
                                </tr>
                            </thead>
                            <tbody>

                              

                            @foreach($results as $value)

                                <tr>
                                    <td>{{$value->id}}</td>
                                    <td>
                                    
                                    <?php 
                                                 $res=rollstar_details($value->user_id);
                                                 if($res==null){

                                                    echo "undefine";
                                                 }else{
                                                    echo $res[0]->name; 
                                                 }
                                                 
                                              ?>
                              </td>
                                    <td>{{$value->total_p_amount}}</td>
                                    <td>{{$value->total_delivery}}</td>                                  
                                    <td>{{$value->total_delivery_charge}}</td>
                                    <td>{{$value->total_hold}}</td>
                                    <td>{{$value->total_return}}</td>                                  
                                    <td>{{$value->total_return_charge}}</td>
                                    <td>{{$value->return_recieved_amount}}</td>
                                    <td>{{$value->rollexpress_paid}}</td>                                  
                                    <td>{{$value->merchandise_recieved_roll}}</td>
                                    <td>{{$value->expenses}}</td>
                                    <td>{{$value->investments}}</td>                                  
                                    <td>{{$value->end_cash_balance}}</td>
                                    <td>
                                            @php
                                                $startdate=strtotime($value->created_at);
                                                    echo date("M d",  $startdate) ." , ";
                                                    echo date("Y",  $startdate);
                                            
                                            @endphp 
                                    
                                    </td>
                                    <!-- <td><span class="text-muted"></span> </td> -->
                                   


                                    <!-- <td><span class="label gradient-1 rounded">Paid</span>
                                    </td> -->

                                </tr>


                                @endforeach

                               

                                <tr>
                                    <!-- <td>
                                        <form action="cancel_product_add" method="post">@csrf<button type="submit"
                                                class="btn btn-danger">Cancel</button></form>
                                    </td> -->
                                    <td>
                                        <!-- <form action="{{url('merchandis/store')}}" method="post">@csrf
                                            <input type="hidden" value="" name="total_amount">
                                            <button type="submit" class="btn btn-success">submit</button>
                                            </form> -->
                                    </td>
                                </tr>

                            </tbody>
                            @endisset
                        </table>
                    </div>
                </div>
            </div>
        </div>











 




    </div>
</div>
<!-- #/ container -->
@endsection