<?php
$id = $_POST["id"];
$val = $_POST["valtxt"];

$id = explode(".",$id);
$id = $id[0];

if($id == 1)
	echo $val . '#<img src="first.jpg" />';
else
	echo $val . '#<img src="second.jpg" />';
?>