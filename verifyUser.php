<html>
<body>
<?php
require 'sqlcon.php';
require 'header.php';

$username = mysql_real_escape_string($_POST["username"]);
$password = mysql_real_escape_string($_POST["password"]);
echo "<div id = 'divmsg'>";
if($con = connect()){
    $result = $con->query("SELECT * FROM organizer WHERE username = '" . $username . "'");
    if($row = $result->fetch_assoc()){
        $pass = $row['password'];
        $name = $row['name'];
        if($pass == $password)
        {   
            echo "<table align = 'center'><tr><td>";
            echo "welcome <b>".$name."!</b><br>click <a href='createevent.php'>"."here"."</a> to create a new event<br>";
            //echo "<a href='createevent.php'>"."create event"."</a>";
            echo "</td></tr></table>";
        }
        else echo "Invalid username or password";
    }
    else echo "invalid username or password";
    $con->close();
}
echo "</div>";
?>
</body>
</html>