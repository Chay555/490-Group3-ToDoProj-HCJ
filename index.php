<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        body {
            font: 14px sans-serif;
        }

        .wrapper {
            width: 360px;
            padding: 20px;
        }
    </style>
</head>

<body>
    <section class="index-login">
        <div class="wrapper">
            <div class="index-login-signup">
                <h2>Sign Up</h2>
                <p>Please fill this form to create an account.</p>
                <form action="includes/signup.inc.php" method="post">
                    <input type="text" name="uid" placeholde="Username">
                    <input type="password" name="pwd" placeholde="Password">
                    <input type="password" name="pwdrepeat" placeholde="Repeat Password">
                    <input type="text" name="email" placeholde="E-mail">
                    <br>
                    <button type="submit" name="submit">Sign Up</button>
                </form>
            </div>

            <div class="index-login-login">
                <h2>Login</h2>
                <p>Don't have an account? Sign up here!</p>
                <form action="includes/login.inc.php" method="post">
                    <input type="text" name="uid" placeholde="Username">
                    <input type="password" name="pwd" placeholde="Password">
                    <br>
                    <button type="submit" name="submit">Login</button>
                </form>
            </div>
        </div>
    </section>
</body>

</html>