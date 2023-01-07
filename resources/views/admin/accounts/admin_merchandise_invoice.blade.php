<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Invoice Print</title>

    <link href="{{ asset('public/invoice/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('font-awesome/public/invoice/css/font-awesome.css')}}" rel="stylesheet">

    <link href="{{ asset('public/invoice/css/animate.css')}}" rel="stylesheet">
    <link href="{{ asset('public/invoice/css/style.css')}}" rel="stylesheet">

</head>

<body class="white-bg">
                <div class="wrapper wrapper-content p-xl">
                    <div class="ibox-content p-xl">
                    <div class="row">
                                <div class="col-sm-6">
                                    <h5>From:</h5>
                                    <address>
                                        <strong>Roll Express.</strong><br>
                                        ৫৬০/সি খিলগাঁও,<br> ঢাকা-১২১৯<br>                                       
                                        <abbr title="Phone">Phone:</abbr>+8801828020427
                                    </address>
                                </div>
                               
                                <div class="col-sm-6 text-right">
                                    <h4>Invoice No.</h4>
                                    <h4 class="text-navy">{{$merchandise[0]->m_invoice_id}}</h4>
                                    <span>To:</span>
                                    <address>
                                        <strong>{{$merchandise[0]->name}}</strong><br>
                                        {{$merchandise[0]->address}}<br>
                                      
                                        <abbr title="Phone">Phone:</abbr> {{$merchandise[0]->phone}}
                                    </address>
                                    <p>
                                        <span><strong>Invoice Date:</strong> 
                                        <!-- {{$merchandise[0]->created_at}} -->
                                        @php
                                        $startdate=strtotime($merchandise[0]->mcreated_at);
                                            echo date("M d",  $startdate) ." , ";
                                            echo date("Y",  $startdate);
                                     
                                        @endphp 
                                        </span><br/>
                                        <!-- <span><strong>Due Date:</strong> March 24, 2014</span> -->
                                    </p>
                                </div>
                            </div>
             <div class="row">

                            <div class="table-responsive m-t col-sm-6">
                            <strong><center> Merchandise Details </center><hr></strong>
                                <table class="table invoice-table">
                                    <thead>
                                    <tr>
                                        <th>Item List</th>
                                        <th>Details</th>
                                        <th>Quantity</th>
                                        <th>Amount</th>
                                        
                                        <!-- <th>Total Price</th> -->
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr> 
                                        
                                        <td>1</td>
                                        <td>Total Product</td>
                                        <td><?php $res=total_quantity($result[0]->id); echo $res[0]->total_quantity;?></td>
                                        <td>{{$result[0]->total_amount}}</td>
                                        <!-- <td>$5.98</td> -->
                                        <!-- <td>$31,98</td> -->
                                    </tr>
                                    <tr>
                                        
                                        <td>2</td>
                                        <td>Total Delivery</td>
                                        <td><?php $total_delivery_quantity=total_delivery_quantity($result[0]->id); echo $total_delivery_quantity[0]->total_delivery_quantity;?> </td>
                                        <td><?php $delivery_amount=total_delivery_amount($result[0]->id); echo $delivery_amount[0]->total_delivery_amount;?> </td>
                                        <!-- <td>$5.98</td> -->
                                        <!-- <td>$31,98</td> -->
                                    </tr>                                   
                                    <tr>
                                        
                                        <td>3</td>
                                        <td>Total Hold Product</td>
                                        <td><?php $total_hold_quantity=total_hold_quantity($result[0]->id); echo $total_hold_quantity[0]->total_hold_quantity;?></td>
                                        <td><?php $hold_amount=total_hold_amount($result[0]->id); echo $hold_amount[0]->total_hold_amount;?></td>
                                        <!-- <td>$5.98</td> -->
                                        <!-- <td>$31,98</td> -->
                                    </tr>
                                    <tr>
                                        
                                        <td>4</td>
                                        <td>Total Return Product</td>
                                        <td><?php $return_quantity=total_return_quantity($result[0]->id); echo $return_quantity[0]->total_return_quantity;?></td>
                                        <td><?php $return_amount=total_return_amount($result[0]->id); echo $return_amount[0]->total_return_amount;?>(cash recieved:<?php $return_charge=total_return_charge($result[0]->id); echo $return_charge[0]->return_recieved_amount;?>)</td>
                                        <!-- <td>$5.98</td> -->
                                        <!-- <td>$31,98</td> -->
                                    </tr>                                   
                                    <!-- <tr>
                                        
                                        <td>6</td>
                                        <td>Total Return Charge</td>
                                        <td>5</td>
                                        <td>3505</td>
                                         <td>$5.98</td>
                                         <td>$31,98</td> 
                                    </tr> -->
                                   

                                    </tbody>
                                </table>
                                
                            </div><!-- /table-responsive -->
                            <div class="table-responsive m-t col-sm-6">
                            <strong><center> Roll Express Details </center><hr>
                            </strong>
                                <table class="table invoice-table">
                                    <thead>
                                    <tr>
                                        <th>Item List</th>
                                        <th>Details</th>
                                        <th>Quantity</th>
                                        <th>Amount</th>
                                        
                                        <!-- <th>Total Price</th> -->
                                    </tr>
                                    </thead>
                                    <tbody>
                                  
                                   
                                    <tr>
                                        
                                        <td>1</td>
                                        <td>Total Delivery Charge</td>
                                        <td><?php $total_delivery_quantity=total_delivery_quantity($result[0]->id); echo $total_delivery_quantity[0]->total_delivery_quantity;?></td>
                                        <td><?php $charge=total_service_charge($result[0]->id); echo  $charge[0]->delivery_charge;?></td>
                                        <!-- <td>$5.98</td> -->
                                        <!-- <td>$31,98</td> -->
                                    </tr>                                 
                                    <tr>
                                        
                                        <td>2</td>
                                        <td>Total Return Charge</td>
                                        <td><?php $return_quantity=total_return_quantity($result[0]->id); echo $return_quantity[0]->total_return_quantity;?></td>
                                        <td><?php $return_charge=total_return_charge($result[0]->id); echo $return_charge[0]->return_charge;?></td>
                                        <!-- <td>$5.98</td> -->
                                        <!-- <td>$31,98</td> -->
                                    </tr>
                                    <!-- <tr>
                                        
                                        <td>6</td>
                                        <td>Total Return Charge</td>
                                        <td>5</td>
                                        <td>3505</td>
                                         <td>$5.98</td>
                                         <td>$31,98</td> 
                                    </tr> -->
                                   

                                    </tbody>
                                </table>
                                
                            </div>
                         </div>
                            <table class="table invoice-total">
                                <tbody>
                                <tr>
                                    <td><strong>Total Merchandise Acceptable Amount :</strong></td>
                                    <td>{{$delivery_amount[0]->total_delivery_amount+$return_amount[0]->total_return_amount}}</td>
                                </tr>
                                <tr>
                                    <td><strong>Total Roll Express Charge :</strong></td>
                                    <td>{{$charge[0]->delivery_charge+$return_charge[0]->return_charge}}</td>
                                </tr>
                                <tr>
                                    <td><strong>Net Merchandise Amount :</strong></td>
                                    <td> @php $net_amount=$delivery_amount[0]->total_delivery_amount+$return_amount[0]->total_return_amount-$charge[0]->delivery_charge-$return_charge[0]->return_charge; @endphp
                                              
                                              {{$net_amount}}</td>
                                </tr>
                                <tr>
                                    <td><strong>Merchandise Due:</strong></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><strong>Roll Express Due :</strong></td>
                                    <td>{{$net_amount-$result[0]->rollexpress_paid}}</td>
                                </tr>
                              
                                <tr>
                                    <td><strong>Roll Express Paid :</strong></td>
                                    <td>{{$result[0]->rollexpress_paid}}</td>
                                </tr>
                                <!-- <tr align="left">
                                    <td><strong>Extra Add Hold Product Price :</strong></td>
                                    <td>$1261.98</td>
                                </tr> -->
                                </tbody>
                            </table>
                            <div class="well m-t"><strong>Extra Add Hold Product Price :</strong>
                            <?php $hold_amount=total_hold_amount($result[0]->id); echo $hold_amount[0]->total_hold_amount;?>
                            </div>
                        </div>

    </div>

    <!-- Mainly scripts -->
    <script src="{{asset('public/invoice/js/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('public/invoice/js/popper.min.js')}}"></script>
    <script src="{{asset('public/invoice/js/bootstrap.js')}}"></script>
    <script src="{{asset('public/invoice/js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>

    <!-- Custom and plugin javascript -->
    <script src="{{asset('public/invoice/js/inspinia.js')}}"></script>

    <script type="text/javascript">
        window.print();
    </script>

</body>

</html>
