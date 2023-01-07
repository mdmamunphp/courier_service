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
                    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
                        data-whatever="@getbootstrap">add product</button> -->
                  
                                   
                
                  
              
              </div>


                            
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-sm-4">
                      
                      @isset($product)
                      @foreach($product as $value)


                                 <div style="margin:20px">
                                      <h5 class="card-title"><b>Invoice:</b>{{$value->m_invoice_id}}</h5>
                                      <small><b>Total Amount:</b>{{$value->total_amount}} <br/>                                
                                        
                                                <b> total quantity:</b>{{$value->agent_id}}
                                                <br/>
                                                <b> delivery:</b>{{$value->agent_id}}
                                                <br/>
                                                <b> return:</b>{{$value->agent_id}}
                                                <br/>
                                                <b> hold:</b>{{$value->agent_id}}
                                           
                                     </small><br/>   
                                     <a href="{{ URL::to('agent_add/'.$value->id) }}"  class="btn btn-primary">agent add</a>     
                                 </div>
                          @endforeach
                      @endisset                            
                  
              
              </div>
       
                

    </div>
</div>
<!-- #/ container -->
@endsection