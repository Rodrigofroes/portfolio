<?php 
    $filename = 'cv/RodrigoOliveira.pdf';
    if (file_exists($filename)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/pdf');
        header('Content-Disposition: attachment; filename="' . basename($filename) . '"');
        header('Content-Length: ' . filesize($filename));
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Expires: 0');
        readfile($filename);
        exit;
    } else {
        echo "O arquivo não está disponível para download.";
    }
?>
