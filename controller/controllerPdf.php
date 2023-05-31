<?php
$archivo = '../img/pdf/CVLuisDamian.pdf';

if (file_exists($archivo)) {
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="' . basename($archivo) . '"');
    header('Content-Length: ' . filesize($archivo));
    readfile($archivo);
    exit;
} else {
    echo 'El archivo no existe.';
}
?>