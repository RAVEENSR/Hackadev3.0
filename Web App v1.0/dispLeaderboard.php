<!DOCTYPE html>
<?php
include ("db.php");
include ("headfile.php"); 

?>
<html>
<head>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>
<body>
<h2 class="header center orange-text">Leaderboard</h2>
<table>
  <tr>
    <th>NIC</th>
    <th>Name</th>
    <th>Points</th>
  </tr>
 <?php
$sql="SELECT * FROM mainleaderb";
if ($result=mysqli_query($conn,$sql))
  {
  // Fetch one and one row

  
  
  while ($row=mysqli_fetch_row($result))
    {
    echo " <tr>
	 
    <td>$row[0]</td>
    <td>$row[1]</td>
    <td>$row[2]</td>
  </tr>";
 
	
	
    }
	
	
  // Free result set
  mysqli_free_result($result);
}

mysqli_close($conn);

?>
</table>

</body>
</html>