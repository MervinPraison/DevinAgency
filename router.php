<?php
// router.php
if (file_exists($_SERVER['DOCUMENT_ROOT'] . $_SERVER['REQUEST_URI'])) {
    return false; // Serve the requested resource as-is.
} else {
    include_once 'index.php';
}
