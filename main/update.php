<?php
include 'db.php';

$collection = $db->your_collection_name;

$updateResult = $collection->updateOne(
    ['_id' => new MongoDB\BSON\ObjectID($_POST['id'])],
    ['$set' => ['word' => $_POST['word'], 'grammer' => $_POST['grammer'], 'meaning' => $_POST['meaning']]]
);

echo "Matched {$updateResult->getMatchedCount()} document(s) and updated {$updateResult->getModifiedCount()} document(s)";
