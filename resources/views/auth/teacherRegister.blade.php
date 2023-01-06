<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Teacher registration</title>
</head>

<body>
    
    <div class="col-4"><a class="btn btn-success m-2 "href="{{route('login')}}">Login</a></div>
    <div>
        <section class="vh-100 " style="background-color: #eee;">
        
            <div class="container  h-100">
                
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-lg-12 col-xl-11">
                        <div class="card text-black" style="border-radius: 25px;">
                            <div class="card-body p-md-5">
                                <div class="row justify-content-center">
                                    <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
    
                                        <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4"> Teacher Sign up</p>
    
                                        <form class="mx-1 mx-md-4" action="{{ url('/Register') }}" method="post"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="d-flex flex-row align-items-center mb-4">
                                                <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                                <div class="form-outline flex-fill mb-0">
                                                    @error('name')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                    <input name='name' type="text" id="form3Example1c"
                                                        class="form-control" required />
                                                    <label class="form-label" for="form3Example1c">Your Name</label>
                                                </div>
                                            </div>
    
                                            <div class="d-flex flex-row align-items-center mb-4">
                                                <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                                <div class="form-outline flex-fill mb-0">
                                                    @error('email')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                                    <input name='email' type="email" id="form3Example3c"
                                                        class="form-control" required />
                                                    <label class="form-label" for="form3Example3c">Your Email</label>
                                                </div>
                                            </div>
    
                                            <div class="d-flex flex-row align-items-center mb-4">
                                                <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                                <div class="form-outline flex-fill mb-0">
                                                    @error('password')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                                    <input name='password' type="password" id="form3Example4c"
                                                        class="form-control" required />
                                                    <label class="form-label" for="form3Example4c">Password</label>
                                                </div>
                                            </div>
    
                                            <div class="d-flex flex-row align-items-center mb-4">
                                                <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                                <div class="form-outline flex-fill mb-0">
                                                    <input name='confirmpassword' type="password" id="form3Example4cd"
                                                        class="form-control" required />
                                                    <label class="form-label" for="form3Example4cd">Repeat your
                                                        password</label>
                                                </div>
                                            </div>
    
    
    
                                            <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                                <button type="submit" class="btn btn-primary btn-lg">Register</button>
                                            </div>
    
                                        </form>
    
                                    </div>
                                    <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                                       
                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
                                            class="img-fluid" alt="Sample image">
    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>


</body>

</html>

























{{-- <h1>Teacher</h1>
<form class="form-control" action="{{url('/Register')}}" method="post" enctype="multipart/form-data">
    @csrf

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">name</label>
        <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>









    <div class="mb-3 col-6">
        <label for="exampleInputEmail1" class="form-label"> Name</label>
        <input  name='name' type="text" class="form-control" id="exampleInputEmail1" placeholder=" Name">
        <div class="er_msg">
            @error('name')
            <span class="invalid-feedback" role="alert ">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        
    </div>
    <br>
    <div class="mb-3 col-6">
        <label for="exampleInputEmail1" class="form-label"> email</label>
        <input  name='email' type="text" class="form-control" id="exampleInputEmail1" placeholder=" Name">
    </div>
    <div class="mb-3 col-6">
        <label for="exampleInputEmail1" class="form-label"> password</label>
        <input  name='password' type="password" class="form-control" id="exampleInputEmail1" placeholder=" Name">
    </div>
    <div class="mb-3 col-6">
        <label for="exampleInputEmail1" class="form-label">Confirm Password</label>
        <input  name='confirmpassword' type="password" class="form-control" id="exampleInputEmail1" placeholder=" Name">
    </div>
    <button type="submit" class="btn btn-primary float-end m-3">register</button>
</form> --}}
