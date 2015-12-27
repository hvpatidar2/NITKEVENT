<html>
<?php
	
	function disp($arr)
	{
		foreach ($arr as $subarr) {
			foreach ($subarr as $key) {
				echo $key." ";
			}
			echo "<br>";
		}
	}
	function sortbyname($arr)
	{
		$n = count($arr);
		for ($i=0; $i < $n-1; $i++) { 
		for ($j=$i+1; $j < $n; $j++) { 
			if($arr[$j][0] < $arr[$i][0])
			{
				$t = $arr[$j];
				$arr[$j] = $arr[$i];
				$arr[$i] = $t; 
			}
			
		}
	}	
	disp($arr);
	}
	
	$record = explode("\n", file_get_contents('file.txt'));
	$final_array = array();
	foreach ($record  as $field) {
		$final_array[] = explode('|', $field);
	}
	//disp($final_array);
	sortbyname($final_array);
	//print_r($final_array);
	//disp($final_array);
?>
</html>