<?php
    require 'header.php';
    require 'sqlcon.php';
    $eid = $_REQUEST['eventid'];
    if($con = connect())
    {
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $pid =  uniqid();
        $quer1 = "insert into participant values ('$pid','$name','$phone','$email')";
        $quer2 = "insert into registers_for values ('$pid','$eid')";
        echo "<table align = 'center'><tr><td>";
        echo "You have been successfully registered for the event!!</table></td></tr>";

       // echo $quer1;
        $con->query($quer1);
        $con->query($quer2);
        $con->close();
    }
?>