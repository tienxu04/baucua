<script type="text/javascript">setTimeout("window.close();", 600);</script>
<style>
body
{
	   position:fixed;
    left: 50%;
    top: 50%;
    -ms-transform: translate(-50%,-50%);
    -moz-transform:translate(-50%,-50%);
    -webkit-transform: translate(-50%,-50%);
     transform: translate(-50%,-50%);
}
</style>
<body>
<?php
//my small project to learn new words every day

include "init.php";

if (isset($_GET['word']))
{
	$word=htmlspecialchars($_GET['word']);
	

	// Check connection
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	else
	{
		$sql = "INSERT INTO word (id, text, meaning, status) VALUES (NULL, '".$word."', '', '0')";
		if ($con->query($sql) === TRUE) {
			echo "New record created successfully";
		} 
		else 
		{
			echo "Error: " . $sql . "<br>" . $con->error;
		}
	}
}
else
{
	echo "Wazzup?";
}


?>
</body>