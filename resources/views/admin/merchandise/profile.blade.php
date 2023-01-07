@extends('admin.master')
@section('content')



<div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="media align-items-center mb-4">
                                    <img class="mr-3" src="{{ asset('public/admin/merchandise/'.$result[0]->images)}}" width="80" height="80" alt="">
                                    <div class="media-body">
                                        <h3 class="mb-0">{{$result[0]->name}}</h3>
                                        <p class="text-muted mb-0">{{$result[0]->address}}</p>
                                    </div>
                                </div>
                                
                                <!-- <div class="row mb-5">
                                    <div class="col">
                                        <div class="card card-profile text-center">
                                            <span class="mb-1 text-primary"><i class="icon-people"></i></span>
                                            <h3 class="mb-0">263</h3>
                                            <p class="text-muted px-4">Following</p>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card card-profile text-center">
                                            <span class="mb-1 text-warning"><i class="icon-user-follow"></i></span>
                                            <h3 class="mb-0">263</h3>
                                            <p class="text-muted">Followers</p>
                                        </div>
                                    </div>
                                    <div class="col-12 text-center">
                                        <button class="btn btn-danger px-5">Follow Now</button>
                                    </div>
                                </div> -->

                                <!-- <h4>About Me</h4>
                                <p class="text-muted">Hi, I'm Pikamy, has been the industry standard dummy text ever since the 1500s.</p> -->
                                <ul class="card-profile__info">
                                    <li class="mb-1"><strong class="text-dark mr-4">Mobile</strong> <span>{{$result[0]->phone}}</span></li>
                                    <li><strong class="text-dark mr-4">Email</strong> <span>{{$result[0]->email}}</span></li>
                                </ul>
                            </div>
                        </div>  
                    </div>
                    <div class="col-lg-8 col-xl-9">
                        <div class="card">
                            <div class="card-body">
                            <form action="{{ url('admin_merchandise_edit/'.$result[0]->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">

                        <!-- <div class="form-group">
                            <label for="invoice-id" class="col-form-label">invoice id:</label>
                            <input type="text" class="form-control" name="invoice_id" id="invoice-id">
                        </div> -->
                        <div class="form-group">
                             <label for="recipient-name" class="col-form-label">মার্চেন্ট এর নাম:</label>
                            <input type="text" class="form-control" value="{{$result[0]->name}}" name="name" id="recipient-name" placeholder="লিখুন মার্চেন্ট এর নাম">
                        </div>
                        <!-- <div class="form-group">
                            <label for="recipient-name" class="col-form-label">email:</label>
                            <input type="email" class="form-control" name="email" id="recipient-name">
                        </div> -->
                        <div class="form-group">
                            <label for="phone-text" class="col-form-label">মার্চেন্ট এর মোবাইল নাম্বার:</label>
                            <input type="text" class="form-control" value="{{$result[0]->phone}}"name="phone" id="phone-name" placeholder="লিখুন মার্চেন্ট এর মোবাইল নাম্বার">
                        </div>
                        <!-- <div class="form-group">
                            <label for="recipient-name" class="col-form-label">মার্চেন্ট এর পাসওয়ার্ড:</label>
                            <input type="text" class="form-control" value="{{$result[0]->password}}"name="password" id="recipient-name" placeholder="লিখুন মার্চেন্ট এর পাসওয়ার্ড">
                        </div> -->
                      
                        <div class="form-group">
                            <label for="phone-text" class="col-form-label">মার্চেন্ট এর ঠিকানা:</label>
                            <input type="text" class="form-control" value="{{$result[0]->address}}"name="address" id="phone-name" placeholder="লিখুন মার্চেন্ট এর ঠিকানা">
                        </div>
                        <!-- <div class="form-group">
                         
                            <input type="hidden" class="form-control" name="role_id" id="phone-name" value="3">
                        </div> -->
                        <div class="form-group">
                            <label for="phone-text" class="col-form-label">মার্চেন্ট এর ছবি:</label>
                            <input type="file" class="form-control" name="images" id="phone-name">
                            <input type="hidden" name="old_images" value="{{ $result[0]->images }}" class="form-control">
                           
                        </div>
                        <img  src="{{ asset('public/admin/merchandise/'.$result[0]->images)}}" height="150" width="150">
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
            </div>


  @endsection