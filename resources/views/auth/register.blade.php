<!DOCTYPE html>
<html lang="en">

@include('frontend.body.header')

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">
            <h3 style="text-align: center; color:white;" >S.B.S.S.P.S.J COLLEGE</h3>
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                   
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                           
                                        <h1 class="h4 text-gray-900 mb-4">Student Registration</h1>
                                    </div>
                                
                                    <x-jet-validation-errors class="mb-4" />

<form method="POST" action="{{ route('register') }}">
    @csrf
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control form-control-user"
                                                id="name" aria-describedby="emailHelp"
                                                placeholder="Enter User Name">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                                id="email" name="email" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="phone" name="phone" placeholder="Contact Number">
                                        </div>
                                        
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="Password" name="password" placeholder="Password">
                                        </div>

                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="password_confirmation" name="password_confirmation" placeholder="Confirm Password">
                                        </div>

                                        <button type="submit" class="btn btn-primary btn-user btn-block">REGISTER</button>
                                        
                                        <hr>
                                        
                                       
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="{{ route('login') }}">Already Registered?</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('/js/sb-admin-2.min.js')}}"></script>

</body>

</html>