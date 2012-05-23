<?php
	// empty function to avoid errors
	function htmlout($str, $blah = false) {return $str;}
	
	// some settings
	if (function_exists("date_default_timezone_set")) date_default_timezone_set("America/New_York");
	
	// some vars
	$now = time();
	
	// Sample Content
	$announcements = array();
	for ($i = 0; $i < 10; $i++) {
		$announcements[$i] = array(
			"curid" => $i,
			"curtitle" => "Lorem ipsum dolor sit amet",
			"curdatestamp" => $now,
			"curdescription" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam lobortis placerat porta. Fusce porta mauris vitae libero vehicula pellentesque elementum erat ultricies.",
			"curimage" => true,
			"curlink" => "",
			"curlinktitle" => "",
			"curlinktarget" => "",
			"curpdf" => "",
			"curpdftitle" => "",
		);
	}
?>