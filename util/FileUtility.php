<?php
class FileUtility
{
	public static function writeCSV($destination, $result){
		// Overwrite file contents
		$myfile = fopen("$destination", "w+") or die("Unable to open file!");
		while ( $row = $result->fetch_assoc () ) {
			fputcsv($myfile, $row);
		}
		fclose($myfile);
	}
	
	
}