<?php 
//// This file contains the loop which generates the draggable div elements(columns)


// create a counter to add a unique class to each draggable div
	$counter = 0; 
	$classcount = $counter++;

//le loop	
	foreach($newarr1 as $test1){ 
// Here we get gangster and store each column name from the array in an incrementing variable to use to display the column name
	$ntitle1 = json_encode($newarr1[$classcount]);  
	
		echo "<div id=\"droppable_demo$classcount\" class=\"droppable_demo\" title=\"(Column Name)\">
				$ntitle1 
			  </div>
		
		<script>  
	Droppables.add('droppable_demo$classcount', { 
    accept: 'draggable',
    hoverclass: 'hover',
    onDrop: function(dragged, dropped, event) {
    $('droppable_demo$classcount').update('Mapped: ' + dragged.title + ' To: ' + dropped.title);
  } 
  });</script>";
		$classcount ++;
    } 

  ?>