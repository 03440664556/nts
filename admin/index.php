<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="Expires" content="Mon, 26 Jul 1997 05:00:00 GMT">
  <meta http-equiv="Pragma" content="no-cache">
  <link rel="shortcut icon" href="../img/favicon.png" />
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" rel="stylesheet" />
  <title>NTS Admin</title>
</head>

<body>
  <!-- menu start -->
  <nav class="navbar fixed-top navbar-expand-md">
    <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
    </div>
    <div class="mx-auto order-0">
      <a class="navbar-brand mx-auto" href="#" onclick="window.location.reload(true);">
        <img src="../img/ntsmain.jpg" alt="Wall of Kindness" class="img-fluid">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
    <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="../index.php"><span class="fas fa-arrow-alt-circle-left">&nbsp;</span>Back To Main Site</a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- menu end -->
  <!-- login start -->
  <div class="container" style="margin-top: 10em;">
      <form class="form-horizontal" role="form" method="POST" action="home.php">
        <div class="row">
          <div class="col-md-3"></div>
          <div class="col-md-6">
            <h2>Please Login</h2>
            <hr>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3"></div>
          <div class="col-md-6">
            <div class="form-group has-danger">
              <label class="sr-only" for="email">E-Mail Address</label>
              <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-at"></i></div>
                <input type="text" name="email" class="form-control" id="email" placeholder="you@example.com" required autofocus>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-control-feedback">
              <span class="text-danger align-middle">
                <i class="fa fa-close"></i> Example error message
              </span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3"></div>
          <div class="col-md-6">
            <div class="form-group">
              <label class="sr-only" for="password">Password</label>
              <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-key"></i></div>
                <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-control-feedback">
              <span class="text-danger align-middle">
                <!-- Put password error message here -->    
              </span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3"></div>
          <div class="col-md-6" style="padding-top: .35rem">
            <div class="form-check mb-2 mr-sm-2 mb-sm-0">
              <label class="form-check-label">
                <input class="form-check-input" name="remember" type="checkbox">
                <span style="padding-bottom: .15rem">Remember me</span>
              </label>
            </div>
          </div>
        </div>
        <div class="row" style="padding-top: 1rem">
          <div class="col-md-3"></div>
          <div class="col-md-6">
            <button type="submit" class="btn btn-success"><i class="fa fa-sign-in"></i> Login</button>
            <a class="btn btn-link" href="/password/reset">Forgot Your Password?</a>
          </div>
        </div>
      </form>
  </div>
  <!-- login end -->
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>