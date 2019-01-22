<?php
	
	
	require 'db.php';
	
	$sql = "SELECT ticket_name FROM tickets";
	$result = $mysqli->query($sql);
	
	foreach ($result as $row){
		$a[] = $row['ticket_name'];
	}
	
	$q = $_REQUEST["q"];
	$hint = "";

	// lookup all hints from array if $q is different from "" 
	if ($q !== "") {
		$q = strtolower($q);
		$len=strlen($q);
		foreach($a as $name) {
			if (stristr($q, substr($name, 0, $len))) {
				if ($hint === "") {
					$hint = $name;
					} else {
					$hint .= "<a href='$name'> $name</a>";
				}
			}
		}
	}
	
	// Output "no suggestion" if no hint was found or output correct values 
	echo $hint === "" ? "" : $hint;
	
	
	
?>	