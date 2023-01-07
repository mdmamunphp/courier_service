
@extends('admin.master')
@section('content')


<div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-validation">
                                <?php  
                                if(isset($product)){
                                    foreach($product as $value){

                               ?>
                                    <form class="form-valide" action="{{ URL::to('delivery_agent_store/store/'.$value->id) }}" method="post">
                                        @csrf
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Invoice Id <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-username" name="admin_invoice_id" placeholder="invocie id">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">product name <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-username" name="product_name" placeholder="Enter a username..">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-email">customer_address <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-email" name="customer_address" placeholder="customer_address">
                                            </div>
                                        </div>                                         
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-email">delivery charge <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-email" name="delivery_charge" placeholder="customer_address">
                                            </div>
                                        </div>   
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-email">Urgent delivery 
                                           
                                            </label>
                                           
                                            <div class="col-lg-6">
                                            
                                                <input type="checkbox" class="form-check-input" id="val-email" name="urgent_delivery" value="1">
                                            </div>
                                        </div>                                    
                                          
                                        
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-skill">Agent <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="val-skill" name="agent_id">
                                                    <option value="">agent select</option>
                                                    @isset($agent)
                                                    @foreach($agent as $value)
                                                    <option value="{{$value->id}}">{{$value->name}}</option>
                                                    @endforeach
                                                    @endisset
                                                </select>
                                            </div>
                                        </div>                                   
                                       
                                      
                                       
                                        
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                    <?php
                                         }
                                        }
                                        ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->

            @endsection