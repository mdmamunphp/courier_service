@extends('admin.master')
@section('content')
<div class="container-fluid">
                <div class="row">
                    <!-- <div class="col-lg-4 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="media align-items-center mb-4">
                                    <img class="mr-3" src="{{ asset('public/asset/images/avatar/11.png')}}" width="80" height="80" alt="">
                                    <div class="media-body">
                                        <h3 class="mb-0">Merchandis</h3>
                                        <p class="text-muted mb-0">Canada</p>
                                    </div>
                                </div>
                                
                                <div class="row mb-5">
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
                                </div>

                                <h4>About Me</h4>
                                <p class="text-muted">Hi, I'm Pikamy, has been the industry standard dummy text ever since the 1500s.</p>
                                <ul class="card-profile__info">
                                    <li class="mb-1"><strong class="text-dark mr-4">Mobile</strong> <span>01793931609</span></li>
                                    <li><strong class="text-dark mr-4">Email</strong> <span>name@domain.com</span></li>
                                </ul>
                            </div>
                        </div>  
                    </div> -->

                    <div class="col-lg-8 col-xl-9">
                        
                     
                          @isset($product)
                           @foreach($product as $value)


                          <div class="col-lg-8 col-xl-9">
                            <div class="card">
                                <div class="card-body">
                                    
                                <div class="form-group row">
                                         <form class="form-valide" action="{{ URL::to('pickup_agent_add/store/'.$value->id) }}" method="post">
                                            @csrf
                                          
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-email" class="text-danger" style="color:#cc66ff">মার্চেন্ট এর নাম   </label>
                                                <div class="col-lg-6">
                                                    <small>{{$value->name}}</small>
                                                    <!-- <input type="text" class="form-control" id="val-email" name="delivery_charge" value="{{$value->name}}"> -->
                                                </div>
                                           </div> 
                                           <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-email" style="color:#cc66ff">মার্চেন্ট এর ঠিকানা  </label>
                                                <div class="col-lg-6">
                                                <small>{{$value->address}}</small>
                                                    <!-- <input type="text" class="form-control" id="val-email" name="delivery_charge" value="{{$value->address}}"> -->
                                                </div>
                                           </div> 
                                           <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-email"  style="color:#cc66ff">মার্চেন্ট এর মোবাইল নাম্বার </label>
                                                <div class="col-lg-6">
                                                <small>{{$value->phone}}</small>
                                                    <!-- <input type="text" class="form-control" id="val-email" name="delivery_charge" value="{{$value->phone}}"> -->
                                                </div>
                                           </div> 
                                           <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="val-email"  style="color:#cc66ff">এজেন্ট এর নাম  </label>
                                                <div class="col-lg-6">
                                                <small>
                                              
                                                
                                               </small>
                                                    <!-- <input type="text" class="form-control" id="val-email" name="delivery_charge" value="{{$value->phone}}"> -->
                                                </div>
                                           </div> 
                                           <div class="form-group row">
                                             <label class="col-lg-4 col-form-label" for="val-skill"  style="color:#cc66ff">এজেন্ট যুক্ত করুন </label>
                                                <select class="form-control" id="val-skill" name="agent_id">
                                                    <option value="">এজেন্ট নির্বাচন করুন</option>
                                                    @isset($agent)
                                                    @foreach($agent as $value)
                                                    <option value="{{$value->id}}">{{$value->name}}</option>
                                                    @endforeach
                                                    @endisset
                                                </select>
                                                
                                            </div>
                                        </div>                                 
                                  
                                    <div class="card-footer">
                                        
                                        <button type="submit" class="btn btn-primary">বার্তা পাঠান</button>
                                    </div>
                                    </form>
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