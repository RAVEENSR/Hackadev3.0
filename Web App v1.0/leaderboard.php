<?php
//include ("headfile.php");

include ("db.php"); 
?>

<!DOCTYPE html>
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

<table>
  <tr>
	 <th>Index</th>
    <th>NIC</th>
    <th>Name</th>
    <th>Service Type</th>
	<th>Comments</th>
	<th>Approve</th>
  </tr>
  <form method="post" action="updateMain.php"> 
<?php
$sql="SELECT * FROM templeaderb";
if ($result=mysqli_query($conn,$sql))
  {
  // Fetch one and one row
 $count = 0;
  
  
  while ($row=mysqli_fetch_row($result))
    {
    echo " <tr>
	 
    <td>$row[0]</td>
    <td>$row[1]</td>
    <td>$row[2]</td>
	<td>$row[3]</td>
	<td>$row[4]</td>
	<td><input type=\"checkbox\" name=\"$row[0]\" value=\"$row[0]\" id=\"$row[0]\"></td>
  </tr>";
  $count++;
	
	
    }
	echo "<input type='hidden' name='countr' value=$count>";
	
  // Free result set
  mysqli_free_result($result);
}

mysqli_close($conn);

?>

</table>
<input type="submit" name="submit" value="Submit">  
</form>

</body>
</html>
