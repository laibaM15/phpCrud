<?php
include 'db.php';

$collection = $db->your_collection_name;

$result = $collection->find();

foreach ($result as $document) {
    var_dump($document);
}
