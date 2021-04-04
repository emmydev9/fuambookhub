<?php
if (isset($_GET['file'])) {
    $file = $_GET['file'];
    if (preg_match('/^[^.][-a-z0-9_.]+[a-z]$/i', $file));
    

    if (file_exists($file)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Dispositon: attachment; filename="'. basename($file) .'"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($file));
        flush();
        die();
    } else {
        http_response_code(404);
        die();
    }
}
?>