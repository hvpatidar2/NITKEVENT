<html>
<!--<head>-->
<!--	<link rel="stylesheet" type="text/css" href="basic.css">-->
<!--</head>-->
	<body>
    <?php
        require "header.php";
    ?>
<!--		<div id = "divtop">-->
<!--		<h1>NITK EVENTS</h1>-->
<!--		</div>-->
	<form  action = "verifyUser.php" method = "post">
        <fieldset>
            <legend>Sign In</legend>
		<table align = "center">

		<tr><td>username:</td><td><input type="text" name = "username" required></td></tr>
		<tr><td>password:</td><td><input type="password" name = "password" required></td></tr>
		<tr><td></td><td><input type = "submit" value = "submit"></td></tr>
		</table>

        </fieldset>
	</form>
</body>
</html>