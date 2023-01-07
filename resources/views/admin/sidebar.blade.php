<?php
                    if(session('sess_type')==1){

                        ?>
<div class="nk-sidebar">           
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <!-- <li class="nav-label">Dashboard</li>
                    <li>
                        <a  href="javascript:void()" aria-expanded="false">
                            <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./index.html">Home 1</a></li>
                             <li><a href="./index-2.html">Home 2</a></li> 
                        </ul>
                    </li> -->
                    <li>
                        <a  href="{{ url('admin')}}" href="javascript:void()" aria-expanded="false">
                            <span class="nav-text">Dashboard</span>
                        </a>                       
                    </li>
                        
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <span class="nav-text">সিস্টেম</span>
                        </a>
                        <ul aria-expanded="false">
                            <!-- <li><a href="#">ইউজার নিবন্ধন</a></li>
                            <li><a href="#">রোল নিবন্ধন</a></li>   -->
                            <li><a href="{{url('return')}}">রিটার্ন নিবন্ধন</a></li>     
                            <li><a href="{{url('hold')}}">হোল্ড নিবন্ধন</a></li>                                
                            
                         </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                           <span class="nav-text">পন্যের অবস্থা </span>
                        </a>
                        <ul aria-expanded="false">
                              <!-- <li><a href="#">পিকাপ</a></li>    
                              <li><a href="#">ডেলিভারি</a></li>                         -->
                              <li><a href="{{url('product_hold_list')}}">হোল্ড</a></li>                              
                              <!-- <li><a href="#">রিটার্ন</a></li>    
                              <li><a href="#">প্রক্রিয়াধীন</a></li>                          -->
                         </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                           <span class="nav-text">মার্চেন্ট </span>
                        </a>
                        <ul aria-expanded="false">
                        <li><a href="{{ url('merchandise_list')}}">মার্চেন্ট নিবন্ধন</a></li> 
                            <!-- <li><a href="{{ url('merchandise_product_view')}}">Pickup Man add</a></li>   -->
                            <li><a href="{{ url('admin_unpickup')}}">পিকআপ</a></li>  
                            <!-- <li><a href="{{ url('admin_customer')}}">delivery man add</a></li>    -->
                            <li><a href="{{ url('admin_undelivery')}}">ডেলিভারি</a></li>                        
                         </ul>
                    </li>                
                  
                   
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <span class="nav-text">এজেন্ট</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ url('agent_list')}}">এজেন্ট নিবন্ধন</a></li>                         
                         </ul>
                    </li>
                     
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <span class="nav-text">লেনদেন এর হিসাব</span>
                        </a>
                        <ul aria-expanded="false">
                             <li><a href="#">Roll Express হিসাব</a></li>
                             <li><a href="{{ url('daily_account')}}">Roll Express প্রতিদিন হিসাব</a></li>
                             <li><a href="{{ url('merchandise_payment')}}">মার্চেন্ট লেনদেন</a></li>
                             <!-- <li><a href="#">এজেন্ট লেনদেন</a></li> -->
                             <li><a href="{{ url('investment')}}">বিনিয়োগ হিসাব</a></li>  
                             <li><a href="{{ url('expense')}}">খরচ হিসাব</a></li>                                                                        
                      
                         </ul>
                    </li>



                 

                    <!-- <?php
 
                    // if(session('sess_type')==2){
                        
                        ?>
                    <li class="mega-menu mega-menu-sm">
                        <a href="{{ url('merchandis_product')}}"  href="javascript:void()" aria-expanded="false">
                           <span class="nav-text">Product add</span>
                        </a>
                        
                    </li>
                    <li class="mega-menu mega-menu-sm">
                        <a href="{{ url('merchandis_product_list')}}"  href="javascript:void()" aria-expanded="false">
                           <span class="nav-text">Product List</span>
                        </a>
                        
                    </li>
                    <?php
                    // }
                  ?> -->
                    <?php
                //    if(session('sess_type')==3){
                        ?>
                        <!-- <li class="mega-menu mega-menu-sm">
                        <a href="{{ url('agent_pickup_list')}}"  href="javascript:void()" aria-expanded="false">
                           <span class="nav-text">Pickup List</span>
                        </a>
                        
                    </li>
                    <li class="mega-menu mega-menu-sm">
                        <a href="{{ url('agent_delivery_list')}}" href="javascript:void()" aria-expanded="false">
                          <span class="nav-text">Delivery List</span>
                        </a>
                        
                    </li> -->
                    <?php
                //    }
                  ?>

<?php
               //     if(session('sess_type')==0){
                        ?>
                        <!-- <li class="mega-menu mega-menu-sm">
                        <a href="#"  href="javascript:void()" aria-expanded="false">
                           <span class="nav-text">my order List</span>
                        </a>
                        
                    </li>                     -->
                    <?php
                   // }
                  ?>
                   
                   
                  
                 
                   
                   
                   
                </ul>
            </div>
        </div>

        <?php
                    }
                  ?>