<!-- Inlcude some vars -->
	<?php include 'globals.php'; ?>

<!-- Load the header -->
	<?php include 'header.php'; ?>
 
 
<!-- Main Page Content -->
 <div class="row">
	<div class="six columns canvas"><div class="heading">Table: <?php echo $tablename ; ?><span class="hright"><i class="gen-enclosed heading-tip foundicon-tools"></i><i class="gen-enclosed heading-tip foundicon-globe"></i><i class="gen-enclosed heading-tip foundicon-cloud"></i></span></div>
 
<!-- Include the draggable loop -->
	<?php include 'draggable.php';?>
	
 </div>
	<div class="six columns canvas"><div class="heading">Table: <?php echo $tablename1 ; ?><span class="hright"><i class="gen-enclosed heading-tip foundicon-tools"></i><i class="gen-enclosed heading-tip foundicon-globe"></i><i class="gen-enclosed heading-tip foundicon-cloud"></i></span></div>
 
<!-- Include the droppble loop -->
	<?php include 'droppable.php'; ?>
	
	</div>
 </div>
    </div> 

  </div>
 
<!-- Load the footer -->
 <?php include 'footer.php'; ?>
 
