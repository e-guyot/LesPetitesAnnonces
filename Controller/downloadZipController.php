<?php
require_once (__DIR__ . '/../Model/AnnoncesModel.php');

if (PHP_SESSION_NONE === session_status()) {
	header('Location: login');
} 

// Define the zip name
$zipname = $dir.DIRECTORY_SEPARATOR.'archive.zip';

// Delete zip if already existing
if (file_exists($zipname)) {
unlink($zipname);
}

// Create zip
$zip = new ZipArchive();
$zip->open($zipname, ZipArchive::CREATE);

// Add files
foreach ($files as $file) {
if (file_exists($dir.DIRECTORY_SEPARATOR.$file)) {
$zip->addFile($dir.DIRECTORY_SEPARATOR.$file, $file);
}
}

// Close ZIP
$zip->close();
