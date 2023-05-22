<?php 

require('db.php');
if (!isset($studentID)) {
    $studentID = filter_input(INPUT_GET,'studentID', FILTER_VALIDATE_INT);
    if ($studentID == NULL || $studentID == FALSE) {
        $studentID = 1;
}
}


try{
    //student
 $qry = 'SELECT   *from Students where studentID = :studentID';
 $statement = $db->prepare($qry);
 $statement->bindValue(':studentID', $studentID);
 $statement->execute();
 $students = $statement->fetch();
 $statement->closeCursor();
}

catch(PDOException $e) {
        include('db_error.php');
    exit();
}


?>
<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <title>ADD Student</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>

<!-- the body section -->
<body>
    <header><h1>Student Manager</h1></header>

    <main>
        <h1>Edit Student</h1>
        <form action="edit.php" method="get">

            <label>studentID:</label>
            <input type="text" name="studentID" value ="<?php echo $students['studentID']; ?>"><br>

            <label>First name:</label>
            <input type="text" name="s_fname"><br>

            <label>Last name:</label>
            <input type="text" name="s_lname"><br>
            <label>Street1:</label>
            <input type="text" name="street1"><br>
            <label>Street2:</label>
            <input type="text" name="street2"><br>
            <label>State</label>
            <input type="text" name="states"><br>
            <label>City:</label>
            <input type="text" name="city"><br>
            <label>Zip:</label>
            <input type="text" name="zip"><br>
            <label>&nbsp;</label>
            <input type="submit" value="EDIT STUDENT"><br>
        </form>
        <p><a href="index.php">View main page</a></p>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Date.</p>
    </footer>
</body>
</html>