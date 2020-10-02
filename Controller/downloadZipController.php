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

// $file = fopen("fichier.csv", "a");
// $tabAnnonces = getAllAnnonces();
// fwrite($file,"Mon texte");
// fclose($file);

$lines = getAllAnnonces();; 
          $patternReturn = '[\r\n]+([^;])';
        echo 'name;prix;contenu;id_user';
        foreach ($lines as $line) {
            echo implode(';', $line) . "\r\n";
        }
        
        $fileName = 'export.csv';
        
        header('Content-Type: text/csv;');
        header('Content-Disposition: attachment; filename=' . $fileName);


// Add files
foreach ($files as $file) {
if (file_exists($dir.DIRECTORY_SEPARATOR.$file)) {
$zip->addFile($dir.DIRECTORY_SEPARATOR.$file, $file);
}
}

// Close ZIP
$zip->close();
