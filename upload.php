<?php
define('UPLOAD_DIR', 'uploads/');
$img = $_POST['camera--output'];
$img = str_replace('data:image/png;base64,', '', $img);
$img = str_replace(' ', '+', $img);
$data = base64_decode($img);
$file = UPLOAD_DIR . uniqid() . '.jpg';
$success = file_put_contents($file, $data);
print $success ? $file : 'Unable to save the file.';
?>
