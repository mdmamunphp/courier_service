@extends('system.master')
@section('content')

<div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content"> 
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">
                            <!-- part from preloader -->
                            <div id="preloader-active">
                                <div class="preloader d-flex align-items-center justify-content-center">
                                  
                                      
                                        <div class="preloader-img pere-text">
                                        <a class="text-center" href="{{url('/')}}">   <img src="{{ asset('public/home/pre_express.png')}}" height="120px" width="120px"alt=""></a>
                                        </div>
                                 
                                </div>
                            </div>
                                <a class="text-center" href="{{url('/')}}"> <h4>Roll Express</h4></a>
        
                                 <form action="login" method="post" class="mt-5 mb-5 login-input">
                                         @csrf
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="phone"placeholder="আপনার মোবাইল নাম্বার লিখুন">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="password" placeholder="আপনার পাসওয়ার্ড লিখুন">
                                    </div>
                                    <button type="submit" class="btn login-form__btn submit w-100">লগ ইন</button>
                                </form>
                                <!-- <p class="mt-5 login-form__footer">Dont have account? <a href="{{ url('register')}}" class="text-primary">Sign Up</a> now</p> -->
                                <p class="mt-5 login-form__footer">আপনার একাউন্ট খুলুন <a href="{{ url('register')}}" class="text-primary"> Sign Up </a> এখন</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection