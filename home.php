<!DOCTYPE html>
<html>
<!--<head>-->
<!--    <link rel='stylesheet' type='text/css' href='link.css'>-->
<!--</head>-->
<?php
require "header.php";

?>
<!--		<div id="divbottom">-->
<!--      			<ul>-->
<!--                    <li><a href="home.php">home</a></li>-->
<!--                    <li><a href="gallery.php">gallery</a></li>-->
<!--                    <li><a href="signin.php">add event</a></li>-->
<!--                    <li><a href="eventsAndTimeline.php">events and timeline</a></li>-->
<!--                    <li><a href="contact.php">Contact us</a></li>-->
<!--                    <li><a href="faq.php">FAQs</a></li>-->
<!--                </ul>-->
<!--            </div>-->
            <?php

                require "sqlcon.php";

                if($con = connect())
                {
                    $result = $con->query("select * from event");
                    while($row = $result->fetch_assoc()){
                        //$eventImage = "poster/".$row['poster'];
                        $eventImage = $row['poster'];
                        //echo $eventImage;
                       // $eventTarget= "viewevent.php?eventid=". $row["eid"];
                        //echo "<a href='$eventTarget'> <img src = '$eventImage' /></a>";
                       // echo "<img src = '$eventImage'  /></a>";
                    }
                    $con->close();

                }
            ?>
<br>
<table align = "center">
    <tr>
        <td>
<img src = 'collarge.png'height='380' width='780' align = "center"/>
        </td>
    </tr>
</table>
	</body>
</html>