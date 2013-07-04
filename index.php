<!-- Load the header -->
	<?php 
	$dbname = $_GET["fname"];
	$user = $_GET["user"];
	$pass = $_GET["pass"];
	$tablename = $_GET["tablename"];
	
	$dbname1 = $_GET["fname1"];
	$user1 = $_GET["user1"];
	$pass1 = $_GET["pass1"];
	$tablename1 = $_GET["tablename1"];
	include 'header.php'; ?>
 
 
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
 
