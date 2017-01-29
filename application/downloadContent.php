<?php

require_once('config.php');

$fileName = $config['content'] . $_GET['titleName'];

if (file_exists($fileName)) {
    header('Content-Description: File Transfer');
    header('Content-Type: ' . getimagesize($fileName)['mime']);
    header('Content-Disposition: attachment; filename="' . strtolower(basename($fileName) . '"'));
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($fileName));
    readfile($fileName);

    exit;

}