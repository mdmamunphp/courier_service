 <div class="col-lg-4 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="media align-items-center mb-4">
                                    <img class="mr-3" src="{{session('sess_user_images')}}" width="80" height="80" alt="">
                                    <div class="media-body">
                                        <h3 class="mb-0">{{session('sess_user_name')}}</h3>
                                        <p class="text-muted mb-0">{{session('sess_user_address')}}</p>
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
                                            <a href="{{ url('merchandise_product/'.session('sess_user_id'))}}"class="btn btn-sm btn-warning">Product Add</a>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card card-profile text-center">                                           
                                            <a href="{{ url('merchandis_product_list')}}" class="btn btn-sm btn-warning">Product List</a>
                                        </div>
                                    </div>   
                                     <div class="col">
                                        <div class="card card-profile text-center">                                           
                                            <a href="{{ url('merchandise_product_profit')}}" class="btn btn-sm btn-warning">My Profit</a>
                                        </div>
                                    </div>       
                                </div>

                                <!--<h4>About Me</h4>-->
                                <!--<p class="text-muted">Hi, I'm Pikamy, has been the industry standard dummy text ever since the 1500s.</p>-->
                                <ul class="card-profile__info">
                                    <li class="mb-1"><strong class="text-dark mr-4">Mobile</strong> <span>{{session('sess_user_phone')}}</span></li>
                                    <li><strong class="text-dark mr-4">Email</strong> <span>{{session('sess_user_email')}}</span></li>
                                </ul>
                            </div>
                        </div>  
                    </div>