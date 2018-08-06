<?php

defined('MOODLE_INTERNAL') || die;

// This function writes the dump data as a json file
// into /tmp/output, which must exist.
function local_profilestorefile_store_profiling_data($rec) {
	$file = fopen("/tmp/output/" . $rec->runid, "w") or die("Unable to write to file, does the folder exist?");
	fwrite($file, json_encode($rec));
	fclose($file);
}
