<?php

require("config.php");

function  hint($content, $exit  = false){
	echo "xuld: ".$content."  <br>";
	
	if($exit){
		exit("xuld: ".$content);
	}
}