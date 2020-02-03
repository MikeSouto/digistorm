<?php
error_reporting(E_ALL);

require_once 'backend/Gallery.php';

$gallery = new Gallery();
$img_type = isset($_GET['type']) ? trim($_GET['type']) : "";
$images = $gallery->getImages($img_type);
$types = $gallery->getExtensions();

require_once 'frontend/Gallery.php';
