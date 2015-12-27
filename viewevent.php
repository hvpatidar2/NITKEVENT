<html>
<?php
require "header.php";
?>
<body>

        <?php
            require "sqlcon.php";
            if($con = connect())
            {
                $eid = $_REQUEST['eventid'];
                $quer = "select * from event where eid = '$eid'";

                $result = $con->query($quer);
                if($row = $result->fetch_assoc()){
                    echo "<table align = 'center'>";
                    echo "<tr><td>Name:</td><td>".$row['name']."</td></tr>";
                    echo "<tr><td>Category:</td><td>".$row['category']."</td></tr>";
                    echo "<tr><td>Venue:</td><td>".$row['venue']."</td></tr>";
                    echo "<tr><td>Time:</td><td>".$row['etime']."</td></tr>";
                    echo "<tr><td>Date:</td><td>".$row['edate']."</td></tr>";
                    echo "<tr><td>Description:</td><td>".$row['description']."</td></tr>";

                    //echo $row['name']."<br>".$row['edate']."<br>".$row['etime']."<br>".$row['description']."<br>".$row['category']."<br>".$row['venue'];
                    
                    $eventTarget= "register.php?eventid=".$eid;
                    
                    $poster = $row['poster'];
                    echo "<tr><td><img src = '$poster' /></td></tr>";
                    echo "<tr><td><a href='$eventTarget'>register</a></td></tr>";
                    $video = $row['video'];
                    
                   // echo "<img src = '$video' />";
                    echo "</table>";

                }
                //else echo "error";

            $con->close();
            }
        ?>
	</body>	
</html>	