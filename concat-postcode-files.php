<?php

$files = scandir("postcode data");
foreach ($files as $file) {

	if ($file == "." || $file == "..")
		continue;
		
	file_put_contents("new_postcodes.csv", file_get_contents("postcode data/".$file), FILE_APPEND);

}

?>