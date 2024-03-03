<?php
include 'db.php';

$collection = $db->your_collection_name;

$data = [
    'word' => $_POST['word'],
    'grammer' => $_POST['grammer'],
    'meaning' => $_POST['meaning']
];

$insertOneResult = $collection->insertOne($data);

echo "Inserted document with id {$insertOneResult->getInsertedId()}";
