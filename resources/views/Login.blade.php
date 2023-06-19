<!doctype html>
<html lang="en">

  <head>
    <style>

body{
    overflow: hidden;
    background-size: cover;
}

.kanan{
    width: 400px;
    height: auto;
}

.text-login{
    text-align: center;
    font-size: 24px;
}

.curved-10{
    border-radius: 10px !important;
    background-color: #d9dde1;
}

.btn-regis{
    background-color: #ffa41d;
    border-radius: 5px;
    font-size: 17px !important;
}

.btn-login{
    background-color: #ffa41d;
    border-radius: 5px;
    font-size: 17px !important;
}
    </style>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <title>Login Page</title>
  </head>
  <body>
    <div class="divide">
        <div class="row">
            <div class="kiri col-md-6 h-100">
                <img class="mw-100" src="{{URL::asset('/images/Login Page.png')}}" alt="Max-width 100%">
            </div> 
            <div class="col-md-6">
                <div class="kanan h-100 card border-0 mx-auto">
                    <div class="my-auto">
                      <p class="text-login font-weight-bold">
                        Login to Your Account
                    </p>
                    <form>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Email address</label>
                          <input type="email" class="form-control curved-10" placeholder="Enter your Email here" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Password</label>
                          <input type="password" class="form-control curved-10" placeholder="Enter your Password here" id="exampleInputPassword1">
                        </div>
                        <div class="d-flex justify-content-between mt-4">
                          <button class="btn btn-regis font-weight-bold col-6">
                            <a href="/Register">Register</a>
                            </button>
                            <button class="btn btn-login font-weight-bold col-6">
                                <a href="/Main">Login</a>
                            </button>
                        </div>
                      </form>
                      <p class="text-center">
                        -OR-
                      </p>
                      <div class="g-signin2" data-onsuccess="onSignIn"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://apis.google.com/js/platform.js" async defer></script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>