<?php
include('../includes/config.php');

$query="select distinct c.name, c.email, c.phone, c.state, c.city, c.issue, c.message from member c order by c.id";

$result = $mysqli->query($query) or die($mysqli->error.__LINE__);



$arr = array();
if($result->num_rows > 0) 
{
	
	while($row = $result->fetch_assoc()) 
	{
		$arr[] = $row;	
	}
}


# JSON-encode the response
$json_response = json_encode($arr);

// # Return the response
echo $json_response;
?>
