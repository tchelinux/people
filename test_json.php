#!/usr/bin/php
<?php

$result_status = 0;
foreach(scandir('people') as $dir) {
	if ($dir[0] == '.')
		continue;
	$data = json_decode(@file_get_contents("people/{$dir}/template.json"));
	if ($data == NULL) {
		echo "ERROR ({$dir}): ".json_last_error_msg()."\n";
		$result_status = 1;
	} else
	if ($data->User != $dir) {
		echo "ERROR ({$dir}): User deve sere exatamente igual ao diretório.\n";
		$result_status = 2;
	}
}
exit($result_status);
?>
