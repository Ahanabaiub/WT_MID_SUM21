<?php
    $name = "Ahanab Shakil";

?>


<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashbord</title>
</head>
<body>
    <h1>Welcome to Admin Dashbord</h1>
    <ul>
        <li><a href="adminInfo.php"><?php echo $name ?></a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>

    <ul>
        <li><a href="addAdmin.php">Add Admin</a></li>
        <li><a href="addTeacher.php">Add Teacher</a></li>
        <li><a href="createStudent.php">Add Student</a></li>
        <li><a href="addCourse.php">Add Course</a></li>
        <li><a href="addSection.php">Add Section</a></li>
        <li><a href="addEmployee.php">Add Employee</a></li>
        <br>
        <li><a href="syllabus_update.php">Update Syllabus</a></li>
        <li><a href="examschedule_form.php">Schedule Exam</a></li>
        <li><a href="librarymodule_form.php">Library module</a></li>
        <li><a href="infoupdate_form.php">Info Update</a></li>
    </ul>
    
</body>
</html>