



<?php
require('db.php');


try{
    
//course
$qry = 'SELECT * from Courses ORDER BY courseID';
$statement = $db->prepare($qry);
$statement->execute();
$course = $statement->fetchAll();
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
        <li><a href="index.php"> Student </a>
           <a href="studentcourse.php">studentcourse </a></li>
        </ul>
        </nav>
</aside>

        <!-- display a table of products -->
        <h2 class="head">Student course list </h2>
        <table>
            <tr>
                <th>CourseID</th>
                <th>Course_name</th>
                <th class="right">Building</th>
                <th>RoomNO</th>
                
            </tr>

            <?php foreach($course as $c) : ?>
    <tr>
        <td><?php echo $c['courseID']; ?></td>
        <td><?php echo $c['courseName']; ?></td>
        <td><?php echo $c['building']; ?></td>
        <td><?php echo $c['roomNo']; ?></td>
      

</tr>
<?php endforeach; ?>


    </table>
   
    </main>
            
</body>
</html>
