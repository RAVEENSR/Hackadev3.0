<?php
include ("db.php"); 


$count =  $_POST['countr'];

for($x = 0; $x<=$count ; $x++){
    if (isset($_POST[$x])) {
    echo $_POST[$x];
	
	$sql = "SELECT nic,name FROM `templeaderb` WHERE No=$x";
	if ($result=mysqli_query($conn,$sql))
  {
	  $result5=mysqli_query($conn,"DELETE FROM templeaderb WHERE No = $x");
	  
	  while ($row=mysqli_fetch_row($result))
    {
		
		$result2=mysqli_query($conn,"INSERT INTO `mainleaderb` (`nic`, `Name`, `Points`) VALUES ('$row[0]', '$row[1]', 10)");
	}
	
	
	mysqli_free_result($result);
  }
}
}

include ("leaderboard.php"); 
?>