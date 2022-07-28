<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=".\bootstrap-5.2.0-beta1-dist\css\bootstrap.min.css">
    <script defer src=".\bootstrap-5.2.0-beta1-dist\js\bootstrap.min.js"></script>
    <title>TemalCode</title>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-light mb-5">
  <div class="container">
    <a class="navbar-brand" href="index.php">TemalCode</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <?php
        if(!(isset($_SESSION['userid']))){
            echo '
            <li class="nav-item">
                <a class="nav-link" href="signup.php">Signup</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
            </li>
            ';
        } else{
            echo '    
            <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>
            </li> ';
        }
        ?>

      </ul>
    </div>
  </div>
</nav>