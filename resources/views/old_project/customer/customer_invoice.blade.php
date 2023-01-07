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
                                <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                        aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="{{ url('merchandis/product_add')}}" method="post">
                                @csrf
                                <div class="modal-body">

                                    <div class="form-group">
                                        <label for="invoice-id" class="col-form-label">invoice id:</label>
                                        <input type="text" class="form-control" name="invoice_id" id="invoice-id">
                                    </div>
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Product Name:</label>
                                        <input type="text" class="form-control" name="product_name" id="recipient-name">
                                    </div>
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Product price:</label>
                                        <input type="text" class="form-control" name="product_price"
                                            id="recipient-name">
                                    </div>
                                    <div class="form-group">
                                        <label for="phone-text" class="col-form-label">phone:</label>
                                        <input type="text" class="form-control" name="phone" id="phone-name">
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">add</button>
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
                        data-whatever="@getbootstrap">add product</button>
                    <div class="table-responsive">
                        <table class="table header-border">
                            <thead>
                                <tr>
                                    <!-- <th>Invoice</th> -->
                                    <th>product_name</th>
                                    <th>price</th>
                                    <th>phone</th>
                                    <th>Status</th>

                                </tr>
                            </thead>
                            <tbody>
                                @if(session('cart'))
                                <?php $total = 0 ?>
                                @foreach(session('cart') as $id => $cat)


                                <?php $total +=$cat['product_price'];


;?>

                                <tr>
                                    <!-- <td>
                                         <a href="javascript:void(0)">{{ $cat['invoice_id'] }}</a> 
                                        {{ $cat['invoice_id'] }}
                                    </td> -->
                                    <td>{{ $cat['product_name'] }}</td>
                                    <td><span class="text-muted">{{ $cat['product_price'] }}</span>
                                    </td>
                                    <td>{{ $cat['phone'] }}</td>
                                    <!-- <td><span class="label gradient-1 rounded">Paid</span>
                                    </td> -->

                                </tr>
                                

                                @endforeach
                               
                                <tr>
                                    <td><b>Total Amount :</b></td>
                                    <td>{{$total}} </td>
                                </tr>

                                <tr>
                                    <td><form action="cancel_product_add" method="post">@csrf<button type="submit" class="btn btn-danger">Cancel</button></form></td>
                                    <td><form action="{{url('merchandis/store')}}" method="post">@csrf
                                    <input type="hidden" value="{{$total}}" name="total_amount">
                                    <button type="submit" class="btn btn-success">submit</button></td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="col-md-6 col-lg-3">
                                <div class="card">
                                    <img class="img-fluid" src="images/big/img3.jpg" alt="">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text and below as a natural lead-in to the additional content. This content is a little bit longer.</p>
                                    </div>
                                    <div class="card-footer">
                                        <p class="card-text d-inline"><small class="text-muted">Last updated 3 mins ago</small>
                                        </p><a href="#" class="card-link float-right"><small>Card link</small></a>
                                    </div>
                                </div>
                        </div> -->

    </div>
</div>
<!-- #/ container -->
@endsection