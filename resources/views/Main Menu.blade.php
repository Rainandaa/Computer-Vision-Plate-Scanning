<!DOCTYPE html>
<html lang="en">
<head>
  <style>
    body{
    background-image: url({{url('images/background-white.jpg')}});
    background-size: cover;
    overflow: hidden;
}

.div0{
    margin-right: 90px;
    margin-top: 30px;
}

.diiv{
    margin-left: 1330px;
    margin-top: -41px;
}

.div1{
    position: fixed;
}

.buttons{
    margin-left: 600px;
    margin-top: 170px;
    position: fixed;
}

.buttons .btn{
    margin-right: 85px;  
}

.teslog{
    margin-left: 660px;
    margin-top: -10px;
}
  </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.rtl.min.css" integrity="sha384-5/ZcxA7Dub2FNG09dHw8CHmPN7Fz6ASlweagj0nuXjmMyupgH9n9F5Hd926zsu3/" crossorigin="anonymous">
    <title>Main Menu</title>
</head>
<body>
  
<!DOCTYPE html>
<html>
<head>
  <title>Navigation Bar</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <style>
    .navbar {
      background-color: transparent;
    }

    .navbar-light .navbar-nav .nav-link {
      color: black;
      border: 1px solid transparent;
      display: flex;
      align-items: center;
    }

    .navbar-light .navbar-nav .nav-link img {
      margin-right: 5px;
    }

    .navbar-light .navbar-nav .nav-link:hover,
    .navbar-light .navbar-nav .nav-link:focus {
      border-color: rgba(0, 0, 0, 0.5);
    }
  </style>
  <script>
    $(document).ready(function() {
      $('.dropdown-toggle').dropdown();
    });
  </script>
</head>
<body>
  <div class="div0">
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="{{URL::asset('/images/adm.png')}}" alt="" style="width: 25px;">
                Admin
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="/Setting">Account Setting</a></li>
                <li><a class="dropdown-item" href="/Login">Log Out</a></li> 
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
</body>
</html>

    <div class="div1">
    <div class="teslog">
        <img src="{{URL::asset('/images/logo.png')}}" alt="Tesla Logo" style="width: 200px;">
    </div>
    <div class="buttons text-center"> <!-- Menambahkan class text-center -->
        <div class="btn">
    <a href="/LogReport"><button type="button" class="btn btn-dark text-center" style="background-color: rgba(0, 0, 0, 0.5);">Log Reports</button></a> <!-- Menambahkan class text-center -->
    <a href="/CameraLocation"><button type="button" class="btn btn-dark text-center" style="background-color: rgba(0, 0, 0, 0.5);">Add Camera</button></a> <!-- Menambahkan class text-center -->
        </div>
    </div>
    </div>
    <!-- <a href="../Login Page/Login.html"><img src="chinese fight.png" alt="" style="width: 