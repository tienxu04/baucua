<?php

include "init.php";
//here you will delete any chosen word [from get] with the input [from post] via ajax
if (isset($_POST['wordtodel']))
{
	//do stuff
	$sql = "DELETE FROM word WHERE id='".$_POST['wordtodel']."'";
	$con->query($sql);
	$con->close();
}
?>