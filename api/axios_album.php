<?php

require "../db/music_db.php";


$albumFilter = key_exists('genre', $_GET) ? $_GET['genre'] : "";

$filteredAlbums = $data;

if($albumFilter) {
    $filteredAlbums = array_filter($data, function ($albums) use ($albumFilter){
        return $albums["genre"] === $albumFilter;
    });
}

header('Content-Type: application/json');
echo json_encode([
    "page" => 1,
    "total_pages" => 1,
    "total_items" => 10,
    "albums" => $filteredAlbums,
]);