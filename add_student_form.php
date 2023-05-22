
<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <title>ADD Student</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>

<!-- the body section -->
<body>
    <header><h1>Student Manage</h1></header>

    <main>
        <h1>Add Student</h1>
        <form action="add_student.php" method="get"
              >

            <label>studentID:</label>
            <input type="text" name="studentID"><br>

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
            <input type="submit" value="Add Student"><br>
        </form>
        <p><a href="index.php">View main page</a></p>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Date.</p>
    </footer>
</body>
</html>