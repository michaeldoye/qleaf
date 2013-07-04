<?php 
//// This file contains the loop which generates the draggable div elements(columns)


// create a counter to add a unique class to each draggable div
	$counter = 0; 
	$classcount = $counter++;

//le loop	
	foreach($newarr as $test){ 
	
// Here we get gangster and store each column name from the array in an incrementing variable to use to display the column name
	$ntitle = json_encode($newarr[$classcount]);  
	
		echo "<div id=\"draggable_demo$classcount\" class=\"draggable draggable_demo\" title=\"(Column Name)\">
				$ntitle 
			  </div>
		
		<script type=\"text/javascript\">
			new Draggable('draggable_demo$classcount', { 
			revert: true 
			});
		</script>";
		$classcount ++;
    } 

  ?>