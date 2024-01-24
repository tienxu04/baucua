<?php

include "init.php";
//here you will update the meaning of the word [from get] with the input [from post] via ajax
if (isset($_POST['newmeaning']) && isset($_POST['wordtoupdate']))
{
	//do stuff
	$sql = "UPDATE word SET meaning='".$_POST['newmeaning']."', status = '1' WHERE id='".$_POST['wordtoupdate']."'";
	$con->query($sql);
	$con->close();
}
?>