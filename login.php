
<!doctype html>
<html lang="en-US">
<?php
require "header.php";
?>
<head>

    <meta charset="utf-8">

    <title>Login</title>




</head>

<body>

<div id="login">

    <h2>Sign In</h2>

    <form action="verifyUser.php" method="POST">

        <fieldset>

            <p><label for="username">Username</label></p>
            <p><input type="text" name="username" id = "username" required></p> <!-- JS because of IE support; better: placeholder="mail@address.com" -->

            <p><label for="password">Password</label></p>
            <p><input type="password" name = "password" id="password" required></p> <!-- JS because of IE support; better: placeholder="password" -->

            <p><input type="submit" value="Sign In"></p>

        </fieldset>

    </form>

</div> <!-- end login -->

</body>
</html>
