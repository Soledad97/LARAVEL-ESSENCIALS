<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') Essencials</title>
    


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>



</head>

<body>
    

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">ESSENCIALS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>

        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>

      <button type="button" class="btn btn-success">login</button>
      <button type="button" class="btn btn-success">logout</button>
    </form>
  </div>
</nav>

<div>
@yield('content')



</div>



<footer>
<div class="container-fluid text-center text-md-left">
  <div class="row">
    <hr class="clearfix w-100 d-md-none pb-3">
    <div class="col-md-6 mb-md-0 mb-6">
      <h5 class="links"><u>Links</u></h5>
      <ul class="links">
        <li>
          <a href="index.php#quienessomos">Nosotros</a>
        </li>
        <li>
          <a href="faq.php">Preguntas frecuentes</a>
        </li>
        <li>
          <a href="login.php">Ingresar</a>
        </li>
        <li>
          <a href="registro.php">Registrarse</a>
        </li>
      </ul>
    </div>
    <div class="col-md-6 mb-md-0 mb-6">
      <h5><u>Nuestras redes</u></h5>
      <ul class="redes">
        <li>
          <a href="https://www.facebook.com"><i class="fab fa-facebook-f fa-lg white mr-md-3 mr-3 fa-1.5x"> </i></a>
        </li>
        <li>
          <a href="https://www.twitter.com"><i class="fab fa-twitter fa-lg white mr-md-3 mr-3 fa-1.5x"> </i></a>
        </li>
        <li>
          <a href="https://www.instagram.com"><i class="fab fa-instagram fa-lg white mr-md-3 mr-3 fa-1.5x"> </i></a>
        </li>
        <li>
          <a href="https://www.web.whatsapp.com"><i class="fab fa-whatsapp fa-lg white mr-md-3 mr-3 fa-1.5x"> </i></a>
        </li>
      </ul>
    </div>
  </div>
 </div>

 </footer>



 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>


</body>
</html>