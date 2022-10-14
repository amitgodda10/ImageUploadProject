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
                                    <x-jet-validation-errors class="mb-4" />


                                        <h1 class="h4 text-gray-900 mb-4">Reset Password</h1>
                                    </div>

                                    <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $request->route('token') }}">


                                        <div class="form-group">
                                            <input id="email" type="email" name="email" class="form-control form-control-user"
                                                id="email"   aria-describedby="emailHelp"
                                                placeholder="Old Email Address...">
                                        </div>

                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user"
                                                id="password" aria-describedby="emailHelp"
                                                placeholder="New Password">
                                        </div>

                                        <div class="form-group">
                                            <input type="password" name="password_confirmation" class="form-control form-control-user"
                                                id="password_confirmation" aria-describedby="emailHelp"
                                                placeholder="Confirm Password">
                                        </div>
                                       
                                       
                                        <button type="submit" class="btn btn-primary btn-user btn-block">Reset Password</button>
                                        
                                        <hr>
                                        
                                       
                                    </form>
                                    <hr>
                                   
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('frontend/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('frontend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('frontend/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('frontend/js/sb-admin-2.min.js')}}"></script>

</body>

</html>