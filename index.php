<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <section class="index-login">
        <div class="wrapper">
            <div class="index-login-signup">
                <h2>Sign Up</h2>
                <p>Please fill this form to create an account.</p>
                <form action="includes/signup.inc.php" method="post">
                    <input type="text" name="uid" placeholder="Username">
                    <input type="password" name="pwd" placeholder="Password">
                    <input type="password" name="pwdrepeat" placeholder="Repeat Password">
                    <input type="text" name="email" placeholder="E-mail">
                    <br>
                    <button type="submit" name="submit">Sign Up</button>
                </form>
            </div>

            <div class="index-login-login">
                <h2>Login</h2>
                <p>Enter user information.</p>
                <form action="includes/login.inc.php" method="post">
                    <input type="text" name="uid" placeholder="Username">
                    <input type="password" name="pwd" placeholder="Password">
                    <br>
                    <button type="submit" name="submit">Login</button>
                </form>
            </div>
        </div>
    </section>

</body>
</html>