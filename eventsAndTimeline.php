<html>
<?php
    require "header.php";
?>
<body>
    <fieldset>
        <legend>Events and Timeline</legend>
    <table align = "center">
        <!-- <tr>
            <th>Events</th>
            <th>Poster</th>
            <!-- <th>latest Registration time</th> -->
        <!-- </tr> -->
       <?php
            require "sqlcon.php";
            if($con = connect())
            {
                $quer = "select * from event";
                $result = $con->query($quer);
                while($row = $result->fetch_assoc())
                {
                    $eid = $row['eid'];
                    $target = "viewevent.php?eventid=". $row["eid"];
                    $name = $row['name'];
                    $poster = $row['poster'];
                    //echo $poster;
                    //$registration_end_date = $row['registration_end_date'];
                    //$registration_end_time = $row['registration_end_time'];
                    echo "<tr><td><img src = $poster height = 100, width = 100></td><td><a href='$target'>$name</a></td></tr>";                
                }
                $con->close();
            }
        ?>
    </table>
    </fieldset>
</body>
</html>