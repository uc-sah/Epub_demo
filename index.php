<?php
	/**
	 * Example Application
	 *
	 * @package Example-application
	 */
	// $string='';
	$files_data = file_get_contents('Epub_data.txt');
	preg_match_all( '/<img(.*?)\/>/', $files_data, $matches, PREG_PATTERN_ORDER );
	preg_match( '/src="(.*?)"/', $files_data, $src );
	preg_match( '/alt="(.*?)"/', $files_data, $alt );
	//Get the Matches Attribute Data
	echo "<pre>matches=> ";
	print_r($matches);
	//Get the Src Attribute Data
	echo "\n src => <pre>";
	print_r($src);
	//Get the Alt attribute data
	echo "\n alt=> <pre>";
	print_r($alt);
?>
