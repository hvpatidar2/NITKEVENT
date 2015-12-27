<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="basic.css">
</head>
<body>
<!--  <div id = "divtop">-->
<!--    <h1>NITK EVENTS</h1>-->
<!--  </div>-->

  <?php
  require 'sqlcon.php';
  require 'header.php';
  if($con = connect()){
  $name = $_POST["contactname"];

  $email = $_POST["emailid"];
//  if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email))
//  {
//    echo "Invalid email format<br>";
//  }

    $date = $_POST["date"];
    $time = $_POST["time"];
    $category = $_POST["category"];
    $description = $_POST["description"];
    $venue = $_POST["venue"];

    $video = $_FILES["video"]["name"];
    $poster =   $_FILES["poster"]["name"];


     echo $posterTarget;
     //echo $_FILES["video"]["tmp_name"];
    move_uploaded_file($_FILES["video"]["tmp_name"],$video);
       // echo "uploaded";
    //else echo "problem uploading file";
    move_uploaded_file($_FILES["poster"]["tmp_name"],$poster);
      //  echo "uploaded";

    $quer = "INSERT INTO event(name,edate,etime,poster,video,description,category,venue)
    VALUES ('$name', '$date','$time','$poster','$video','$description','$category','$venue')";
    //echo $quer;
    $con->query($quer);
    echo "<div id = 'divmsg'>";
    echo "Congrats!! You have successfully created a new event";
    echo "</div>";
    $con->close();
  }  

  ?>

</body>
</html>