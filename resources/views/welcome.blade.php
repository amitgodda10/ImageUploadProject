<!DOCTYPE html>
<html lang="en">

@include('frontend.body.header')

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">
            <h3 style="text-align: center; color:white;" >PROJECT WORK</h3>
            
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
            
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image">
                                
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                    <x-jet-validation-errors class="mb-4" />

<!-- @if (session('status'))
    <div class="mb-4 font-medium text-sm text-green-600">
        {{ session('status') }}
    </div>


@endif -->
                                        <h1 class="h4 text-gray-900 mb-4">Welcome</h1>
                                    </div>
                          <!--Buttons--------->

                          @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                 
                        <a href="{{ url('/dashboard') }}" class="btn btn-primary btn-user btn-block">
                        <i class="fas fa-desktop"></i>         Dashboard
                                        </a>
                    @else
                        
                        <hr>
                         <a href="{{ route('login') }}" class="btn btn-google btn-user btn-block">
                         <i class="fas fa-sign-in-alt"></i>            Login 
                                        </a>

                        @if (Route::has('register'))
                            
                            <a href="{{ route('register') }}" class="btn btn-facebook btn-user btn-block">
                            <i class="fas fa-file-alt"></i> Register
                                        </a>
                        @endif
                    @endauth
                </div>
            @endif

                         


                                       


                                       






                          <!--Buttons Ends----->
                                   
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
    <script src="{{asset('/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('/js/sb-admin-2.min.js')}}"></script>

</body>

</html>