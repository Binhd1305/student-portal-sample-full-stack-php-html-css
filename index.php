<?php
require('db.php');
if (!isset($studentID)) {
    $studentID = filter_input(INPUT_GET, 'studentID', 
            FILTER_VALIDATE_INT);
    if ($studentID == NULL || $studentID == FALSE) {
        $studentID = 1;
}
}


try{
    //student
 $qry = 'SELECT * from Students ORDER by StudentID;';
 $statement = $db->prepare($qry);
 $statement->execute();
 $result = $statement->fetchAll();
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
    <title>Student Information</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>

<!-- the body section -->
<body>
<header><h1>Student  Manage</h1></header>
<main>
    <h1>Information List</h1>

    <aside>
        <!-- display a list of categories -->
        <h2>More</h2>
        <nav>
          
        <ul>
        <li><a href="course.php"> Course </a>
           <a href="studentcourse.php">studentcourse </a></li>
        </ul>
        </nav>
</aside>

        <!-- display a table of products -->
        <h2 class="head">Student list </h2>
        <table>
            <tr>
                <th>StudentID</th>
                <th>FirstName</th>
                <th class="right">Lastname</th>
                <th>Street1</th>
                <th>Street2</th>
                <th>State</th>
                <th>City</th>
                <th>Zip</th>
                <th>Delete</th>
                <th>Edit</th>
            </tr>

            <?php foreach($result as $r) : ?>
    <tr>
        <td><?php echo $r['studentID']; ?></td>
        <td><?php echo $r['s_fname']; ?></td>
        <td><?php echo $r['s_lname']; ?></td>
        <td><?php echo $r['street1']; ?></td>
        <td><?php echo $r['street2']; ?></td>
        <td ><?php echo $r['states']; ?></td>
        <td ><?php echo $r['city']; ?></td>
        <td ><?php echo $r['zip'] ?></td>
        <td><form action="delete_student.php" method="get">
                    <input type="hidden" name="studentID"
                           value="<?php echo $r['studentID']; ?>">
    
                    <input type="submit" value="Delete">
                </form></td>
                <td><form action="edit_form.php" method="get">
                <input type="hidden" name="studentID"
                           value="<?php echo $r['studentID']; ?>">
    
                    <input type="submit" value="Edit">
                </form></td>

</tr>
<?php endforeach; ?>


    </table>
    <p><a href="add_student_form.php">Add Student</a></p>
   
    </main>
            
</body>
</html>
