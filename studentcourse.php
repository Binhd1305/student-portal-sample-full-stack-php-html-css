



<?php
require('db.php');


try{
    //Student course

$qry = 'SELECT * from studentcourse ORDER by studentID;';
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
        <li><a href="index.php"> Student </a></li>
          <li> <a href="Course.php">Course </a></li>
        </ul>
        </nav>
</aside>

        <!-- display a table of products -->
        <h2 class="head">Student course list </h2>
        <table>
            <tr>
                <th>StudentID</th>
                <th>CourseID</th>
                <th class="right">Grade</th>
                <th>classesMiss</th>
                <th>classsesAttend</th>
                
            </tr>

            <?php foreach($result as $r) : ?>
    <tr>
        <td><?php echo $r['studentID']; ?></td>
        <td><?php echo $r['courseID']; ?></td>
        <td><?php echo $r['grade']; ?></td>
        <td><?php echo $r['classesMiss']; ?></td>
        <td><?php echo $r['classesAttend']; ?></td>
      

</tr>
<?php endforeach; ?>


    </table>
   
    </main>
            
</body>
</html>
