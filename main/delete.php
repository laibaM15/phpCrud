<?php
include 'db.php';

$collection = $db->your_collection_name;

$deleteResult = $collection->deleteOne(['_id' => new MongoDB\BSON\ObjectID($_POST['id'])]);

echo "Deleted {$deleteResult->getDeletedCount()} document";
