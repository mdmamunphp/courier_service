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

                            <div class="table-responsive m-t"> 
                                <table class="table invoice-table">
                                    <thead>
                                    <tr>
                                    <th>No</th>
                                        <th>Customer Name </th>
                                        <th>Delivery Address</th>  
                                        <th>Customer Phone</th>
                                        <th>Product Price</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @isset($result)
                                    @php
                                    $s_n=0;
                                    $sub_total=0;
                                    $charge =0;
                                    @endphp
                                    @foreach($result as $value)

                                   
                                    <tr>
                                    @php
                                    $s_n ++;
                                    $sub_total +=$value->product_price;
                                    $charge +=$value->delivery_charge;
                                    @endphp

                                        <td>{{$s_n}}</td>                
                                      
                                        <td>{{$value->customer_name}}</td>
                                        <td>{{$value->customer_address}}</td>
                                        <td>{{$value->customer_phone}}</td>
                                        <td>{{$value->product_price}}</td>
                                    </tr>

                                    @endforeach
                                    @endisset
                                  
                                  
                                    </tbody>
                                </table>
                            </div><!-- /table-responsive -->
                            
                            <table class="table invoice-total">
                                <tbody>
                                <tr>
                                    <td><strong>Customer Paid:</strong></td>
                                    <td>{{$sub_total}}</td>
                                </tr>
                                <tr>
                                    <td><strong>Roll Express Charge :</strong></td>
                                    <td>{{$charge}}</td>
                                </tr>
                                <tr>
                                    <td><strong>Merchandise Net Amount :</strong></td>
                                    <td>{{$sub_total-$charge}}</td>
                                </tr>
                                </tbody>
                            </table>
                              <!-- <img src="{{ asset('public/roll-2.jpg')}}" height="100" width="100"> -->
                            
                                 <div class="well m-t"><strong>Roll Star Info</strong><br>
                                 <?php $res=rollstar_details($result[0]->agent_id);
                                          if($res==null){
                                            echo "undefine";
                                        }else{
                                            echo $res[0]->name."<br>";
                                            echo $res[0]->phone
                                            ?>

                                    <?php }
                                        ?>
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
