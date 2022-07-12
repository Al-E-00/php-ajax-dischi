<?php

require __DIR__ . "/../db/music_db.php";

header('Content-Type: application/json');

echo json_encode([
    "page" => 1,
    "total_pages" => 1,
    "total_items" => 10,
    "albums" => $data,
]);