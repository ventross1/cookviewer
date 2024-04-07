<?php
$temp = file_get_contents("temp.html");
$data = [
    'logo' => file_get_contents("logosmartcook.svg")
];
foreach ($data as $key => $value) {
    $temp = str_replace("{{$key}}", $value, $temp);
}
echo $temp;