<?php

//require("phpsqlajax_dbinfo.php");

// Start XML file, create parent node

$dom = new DOMDocument("1.0");
$node = $dom->createElement("markers");
$parnode = $dom->appendChild($node);

// Opens a connection to a MySQL server



$connection = mysqli_connect('localhost', 'root', '') ;

if (!$connection) {  die('Not connected : ' . mysqli_error($connection));}

// Set the active MySQL database

$db_selected = mysqli_select_db($connection,"dms");
if (!$db_selected) {
  die ('Can\'t use db : ' . mysql_error());
}

// Select all the rows in the markers table

$query = "SELECT * FROM sevices WHERE 1";
$result = mysqli_query($connection,$query);
if (!$result) {
  die('Invalid query: ' );
}

header("Content-type: text/xml");

// Iterate through the rows, adding XML nodes for each

/*while ($row = @mysqli_fetch_assoc($result)){
  // Add to XML document node
  $node = $dom->createElement("marker");
  $newnode = $parnode->appendChild($node);
  $newnode->setAttribute("id",$row['id']);
  $newnode->setAttribute("name",$row['name']);
  $newnode->setAttribute("address", $row['address']);
  $newnode->setAttribute("lat", $row['lat']);
  $newnode->setAttribute("lng", $row['lng']);
  $newnode->setAttribute("type", $row['type']);
}*/

while ($row = @mysqli_fetch_assoc($result)){
 $node = $dom->createElement("marker");
  $newnode = $parnode->appendChild($node);
  $newnode->setAttribute("serviceId",$row['serviceId']);
  $newnode->setAttribute("type",$row['type']);
  $newnode->setAttribute("serviceName", $row['serviceName']);
  $newnode->setAttribute("personName", $row['personName']);
  $newnode->setAttribute("profession", $row['profession']);
  $newnode->setAttribute("nic", $row['nic']);
  $newnode->setAttribute("address", $row['address']);
  $newnode->setAttribute("district", $row['district']);
  $newnode->setAttribute("division", $row['division']);
  $newnode->setAttribute("mobile", $row['mobile']);
  $newnode->setAttribute("timeCon", $row['timeCon']);
  $newnode->setAttribute("priceCon", $row['priceCon']);
  $newnode->setAttribute("otherCon", $row['otherCon']);
  $newnode->setAttribute("comment", $row['comment']);
  $newnode->setAttribute("longi", $row['longi']);
  $newnode->setAttribute("lati", $row['lati']);
  $newnode->setAttribute("availability", $row['availability']);
  $newnode->setAttribute("lastUpdated", $row['lastUpdated']);
  $newnode->setAttribute("stage1approve", $row['stage1approve']);
  $newnode->setAttribute("stage2approve", $row['stage2approve']);
  $newnode->setAttribute("stage3approve", $row['stage3approve']);

}

echo $dom->saveXML();

?>