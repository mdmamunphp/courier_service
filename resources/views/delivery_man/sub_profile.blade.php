<div class="col-lg-4 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="media align-items-center mb-4">
                                    <img class="mr-3"  src="{{ asset('public/admin/agent/'.session('sess_user_images'))}}" width="80" height="80" alt="">
                                    <div class="media-body">
                                        <h3 class="mb-0">{{session('sess_user_name')}}</h3>
                                        <p class="text-muted mb-0">{{session('sess_user_email')}}</p>
                                    </div>
                                </div>
                                
                                <div class="row mb-5"> 
                                    <!-- <div class="col">
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
                                    </div> -->
                                    <div class="col">
                                        <div class="card card-profile text-center">                                           
                                            <a href="{{ url('agent_pickup_list/'.session('sess_user_id'))}}"class="btn btn-sm btn-warning">Pickup</a>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card card-profile text-center">                                           
                                            <a href="{{ url('agent_delivery_list/'.session('sess_user_id'))}}" class="btn btn-sm btn-warning">Delivery</a>
                                        </div>
                                    </div>                                   
                                </div>

                               
                                    <li class="mb-1"><strong class="text-dark mr-4">Mobile</strong> <span>{{session('sess_user_phone')}}</span></li>
                                    <li><strong class="text-dark mr-4">Email</strong> <span>{{session('sess_user_email')}}</span></li>
                                </ul>
                            </div>
                        </div>  
                    </div>
                        