<?php

$gallery = $_GET["gallery"];

if (!$gallery) {
	echo "{'error':'Empty parameter', 'code':0}";
} else {
	$folder_path = "images/" . $gallery;
	if (is_dir($folder_path)) {
		$images = array_diff(scandir($folder_path, 1), array('.', ".."));
		echo json_encode($images, false);
	} else {
		echo "{'error':'The folder is not exist', 'code':1}";
	}
}
