<?php

$studentID = filter_input(INPUT_GET, 'studentID', FILTER_VALIDATE_INT);
$fname = filter_input(INPUT_GET, 's_fname');
$lname = filter_input(INPUT_GET, 's_lname');
$street1= filter_input(INPUT_GET, 'street1');
$street2= filter_input(INPUT_GET, 'street2');
$states= filter_input(INPUT_GET, 'states');
$city= filter_input(INPUT_GET, 'city');
$zip= filter_input(INPUT_GET, 'zip', FILTER_VALIDATE_INT);
if ($studentID== null || $studentID == false ||
        $fname == null || $lname == null || $street1 == null || $states == null || $city == NULL || $zip == NULL || $zip == false) {
    $error = "Invalid product data. Check all fields and try again.";
    include('db_error.php');
        }
else {
    require_once('db.php');


    // Add the student to the database 
  
    $query = 'UPDATE students SET studentID = :studentID , s_fname =  :s_fname, s_lname = :s_lname, street1 = :street1, street2 = :street2, states = :states, city = :city, zip =:zip
    WHERE studentID =  :studentID ';
    
    $statement = $db->prepare($query);
    $statement->bindValue(':studentID', $studentID);
    $statement->bindValue(':s_fname', $fname);
    $statement->bindValue(':s_lname', $lname);
    $statement->bindValue(':street1', $street1);
    $statement->bindValue(':street2', $street2);
    $statement->bindValue(':states', $states);
    $statement->bindValue(':city', $city);
    $statement->bindValue(':zip', $zip);
    $statement->execute();
    $statement->closeCursor();
  
    // Display the Product List page
    include('index.php');
}


?>