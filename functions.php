<?php
function render($template, $data) {

	$rendered_string = file_get_contents($template);

	foreach ($data as $key=>$value) {
		$pattern = '/{{\s*' . $key . '\s*}}/';
		$rendered_string = preg_replace($pattern, $value, $rendered_string);
	}

	echo $rendered_string;
}