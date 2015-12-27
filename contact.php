<html>
<?php
    require "header.php";
?>
<body>
    <fieldset>
        <legend>Contact Us</legend>
    <form action="contact.php" method="post">


        <table align = "center">
            <tr><td>Name</td><td><input type="text" name="name" required=""></td></tr>
            <tr><td>Email</td><td><input type="text" name="email" required=""></td></tr>
            <tr><td>Phone</td><td><input type="text" name="phone" required=""></td></tr>
            <tr><td>message</td><td><textarea  rows = "6" cols = "30" name="message" required=""></textarea></td></tr>
            <tr><td><input type="submit" value="submit"></td></tr>
        </table>

    </form>
    </fieldset>
</body>
</html>