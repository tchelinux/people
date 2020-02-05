#!/usr/bin/php
<?php

$result_status = 0;
foreach(scandir('people') as $dir) {
	if ($dir[0] == '.')
		continue;
	$data = json_decode(@file_get_contents("people/{$dir}/template.json"));
	if (!$data) {
		echo "ERROR ({$dir}): ".json_last_error_msg()."\n";
		$result_status = 1;
	}
}
exit($result_status);
?>
