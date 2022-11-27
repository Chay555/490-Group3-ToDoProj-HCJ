<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>DiaExpedia</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="shortcut icon" href="favicon4.ico" />
</head>


<body>
  <nav class="py-2 bg-light border-bottom">
    <div class="container d-flex flex-wrap">
      <ul class="nav me-auto">
      </ul>
      <ul class="nav">
		<li class="nav-item"><a href="indexSignup.php" class="nav-link link-dark px-2" name="submit2">Sign-Up</a></li>
      </ul>
    </div>
  </nav>
  <div class="container d-flex flex-wrap justify-content-center">
    <a href="/" class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto text-dark text-decoration-none">
      <svg class="bi me-2" width="40" height="32">
        <use xlink:href="#bootstrap"></use>
      </svg>
	 <span class="fs-4">DiaExpedia - Daily Journal!</span>
    </a>
  </div>
  

<body>
    <section class="index-login">
        <div class="row mb-3">
			<br>
            <div class="index-login-login">
                <h2>Login</h2>
                <p>Enter user information.</p>
                <form action="includes/login.inc.php" method="post">
                    <input type="text" name="uid" placeholder="Username">
                    <input type="password" name="pwd" placeholder="Password">
                    <br>
                    <button type="submit" class="btn btn-primary" name="submit">Login</button>
                </form>
            </div>
        </div>
    </section>

</body>

<div class="container">
  <footer class="py-5 my-5">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3"></ul>
    <p class="text-center text-muted">©2022 Dia Expedia, Inc</p>
  </footer>
</div>

</html>