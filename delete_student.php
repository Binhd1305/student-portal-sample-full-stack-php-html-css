<?php
require_once('db.php');

// Get IDs
$studentID = filter_input(INPUT_GET, 'studentID', FILTER_VALIDATE_INT);


// Delete the product from the database
if ($studentID!= false ) {
    $query = 'DELETE  FROM Students
              WHERE studentID = :studentID';
    $statement = $db->prepare($query);
    $statement->bindValue(':studentID', $studentID);
    $success = $statement->execute();
    $statement->closeCursor();    
}

// Display the Product List page
include('index.php');