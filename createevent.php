<html>
<?php
require "header.php";
?>
	<body>
    <fieldset>
        <legend>Create a new Event:</legend>

        <form  action = "addevent.php" method = "post" enctype="multipart/form-data">
		<table align = "center">
		<tr><td>date:</td><td><input type = "text" name = "date" ></td></tr>
		<tr><td>time:</td><td><input type = "text" name = "time" ></td></tr>
		<tr><td>category:</td><td><select name="category">
				<option value = "academic">academic</option>
				<option value = "cultural">cultural</option>
				<option value = "literature">literature</option>
				<option value = "art">art</option>
				<option value = "others">academic</option>
			</select></td></tr>
		<tr><td>description:</td><td><input type = "text" name = "description"></td></tr>
		<tr><td>venue:</td><td><input type = "text" name = "venue"></td></tr>
		<tr><td>contact name:</td><td><input type = "text" name = "contactname" ></td></tr>
		<tr><td>emailid:</td><td><input type = "text" name = "emailid" ></td></tr>
		<tr><td>contact:</td><td><input type = "text" name = "contact"></td></tr>
<!--        <tr><td>team members:</td><td><input type = "text" name = "team_members" ></td></tr>-->
        <tr><td>no of seats:</td><td><input type = "text" name = "seats" ></td></tr>

<!--        <tr><td>registration start date:</td><td><input type = "text" name = "registration_start_date" ></td></tr>-->
<!--        <tr><td>registration end date:</td><td><input type = "text" name = "registration_end_date:" ></td></tr>-->
<!---->
<!--        <tr><td>registration start time:</td><td><input type = "text" name = "registration_start_time" ></td></tr>-->
<!--        <tr><td>registration end time:</td><td><input type = "text" name = "registration_end_time:" ></td></tr>-->

        <tr><td>prerequisites:</td><td><input type = "file" name = "prerequisites" id="prerequisites"></td></tr>
        <tr><td>video:</td><td><input type = "file" name = "video" id="video"></td></tr>
		<tr><td>poster:</td><td><input type = "file" name = "poster" id="poster"></td></tr>
		<tr><td></td><td><input type = "submit" value = "submit"></td></tr>
		</table>
	</form>
     </fieldset>
	
</body>
</html>