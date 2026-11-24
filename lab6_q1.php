<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 6 Q1</title>
</head>
<body>
    <?php
        $name    = "IFFA IRDIENA BINTI ISMAIL";
        $matric  = "AI250298";
        $course  = "COMPUTER SCIENCE (INFORMATION SECURITY)";
        $year    = "YEAR 2 SEMESTER 1";
        $address = "KLUANG, JOHOR";
    ?>

    <table border="1">
        <tr><td>Name</td><td><?php echo $name; ?></td></tr>
        <tr><td>Matric Number</td><td><?php echo $matric; ?></td></tr>
        <tr><td>Course</td><td><?php echo $course; ?></td></tr>
        <tr><td>Year of Study</td><td><?php echo $year; ?></td></tr>
        <tr><td>Address</td><td><?php echo $address; ?></td></tr>
    </table>
</body>
</html>
