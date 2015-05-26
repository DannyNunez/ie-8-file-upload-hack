<?php

$uploaddir = $_SERVER["DOCUMENT_ROOT"] . '/images/';

$uploadfile = basename($_FILES['uploadfile1']['name']);
header('Content-Type: text/html');
if (move_uploaded_file($_FILES['uploadfile1']['tmp_name'], $uploadfile)) {
    echo '<input type="text" id="txt1" value="1" />';
} else {
    echo '<input type="text" id="txt1" value="2" />';
}
echo "<pre>";
echo print_r($_FILES);
echo "</pre>";
die();