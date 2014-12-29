<?php

$uploaddir = dirname(__FILE__).'/uploaddir/';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
$editor = $_POST['editor'];

$image_type = array('image/jpeg', 'image/pjpeg', 'image/gif', 'image/png', 'image/x-png', 'image/bmp');

echo '<script>';
if(in_array($_FILES['userfile']['type'], $image_type)) {
	echo 'window.parent.'.$editor.'.insertContent("<img src=\'uploaddir\/'.$_FILES['userfile']['name'].'\' />");';
} else {
	echo 'window.parent.'.$editor.'.insertContent("<a href=\'uploaddir\/'.$_FILES['userfile']['name'].'\'>'.$_FILES['userfile']['name'].'</a>");';
}
echo 'window.parent.'.$editor.'.plugins.upload.finish();';
echo '</script>';
?>