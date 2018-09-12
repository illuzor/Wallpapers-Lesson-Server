<?php

$folders = array_diff(scandir("images_previews", 1) , array('.',".."));
$result = [];

foreach($folders as $k => $v) {
  $result[$k] = ["name" => $v, "preview" => random_file("images_previews/" . $v)];
}

function random_file($dir) {
  $files = glob($dir . '/*.*');
  $index = array_rand($files);
  return $files[$index];
}

echo json_encode($result);
