<?php

$targetFolder = $_SERVER['DOCUMENT_ROOT'].'/projects/EMS/storage/app/public';
// echo $targetFolder;exit;
$linkFolder = $_SERVER['DOCUMENT_ROOT'].'/projects/EMS/public/storage';
symlink($targetFolder,$linkFolder);
echo 'Symlink process successfully completed';