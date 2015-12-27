<?php

//$dataRoot = '~/data/';
$dataRoot = '/var/www/nitk';
function connect()
{
	$con= new mysqli("localhost","root","a","nitk");
	// Check connection
	if ($con->connect_errno) 
	{
		echo "Failed to connect to MySQL: " . $con->connect_errno;
	}
	return $con;
}

?>
