
@extends('system.master')
@section('content')
    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">
                                
                                    <a class="text-center" href="index.html"> <h4>Roll Express <br></h4></a>
                                   
        
                                <form action="{{ url('regiser_all_users')}}" method="post" class="mt-5 mb-5 login-input">
                                @csrf
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" placeholder="Name" required>
                                    </div>
                                   
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="phone" placeholder="Phone Number" required>
                                    </div>
                                     <div class="form-group">
                                     <input type="hidden" class="form-control" name="role_id"  value="2">
                                        <input type="text" class="form-control" name="password" placeholder="Password" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="phone-text" class="col-form-label">Images:</label>
                                        <input type="file" class="form-control" name="images">
                                    </div>
                                    <button type="submit" class="btn login-form__btn submit w-100">Sign Up</button>
                                </form>
                                    <p class="mt-5 login-form__footer">Have account  a <a href="{{ url('login_page')}}" class="text-primary">Sign In </a> now</p>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection