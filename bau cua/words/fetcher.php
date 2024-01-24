<?php
include "init.php";
if (mysqli_connect_errno())
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
else
{
	$sql = "SELECT * FROM word ORDER By status ASC, id DESC";
	$result = $con->query($sql);
	$allword = array();
	if ($result->num_rows > 0) 
	{
		while($row = $result->fetch_assoc()) {
			$allword[$row["text"]] = $row["meaning"];
			//echo $row["text"]."<br/>".$row["meaning"];
		}
	}
	else 
	{
		echo "0 results";
	}
}
/*foreach($allword as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}*/
$keys = array_keys($allword);
for ($i=0;$i<=count($allword)-1;$i++)
{
$key = $keys[$i]; //key = word
$value = $allword[$key];
//echo $key." = ".$value."<p>";
}
echo $keys[2]." = ".$allword[$keys[2]]."<p>";
echo $keys[1]." = ".$allword[$keys[1]]."<p>";
echo $keys[3]." = ".$allword[$keys[3]]."<p>";
?>