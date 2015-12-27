<html>
<?php
require "header.php";
?>
    <body>
    <?php
    $eid = $_REQUEST['eventid'];


    echo "<form action='registered.php?eventid=$eid' method='POST'>";
    ?>
    <fieldset>
        <legend>Register:</legend>
        <table align = "center">
        
            <tr><td>Name:</td><td><input type='text' name='name' required></td></tr>
             <tr><td>Phone:</td><td><input type='text' name='phone' required></td></tr><tr></tr>
             <tr><td>Email:</td><td><input type='text' name='email' required></td></tr><tr></tr>
            <tr><td><input type="submit"></td></tr>
        </table>

    </fieldset>


    </body>
</html>
