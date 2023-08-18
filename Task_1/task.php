<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task</title>
</head>
<body>
    <form action="" method="post">
        Width: <input type="number" name="width"><br><br>
        Length: <input type="number" name="length"><br><br>
        <input type="submit" name="submit" value="calculate"><br><br>
    </form>
</body>
</html>

<?php
    if (isset ($_POST['submit'])) {
        $width = $_POST['width'];
        $length = $_POST['length'];

        $area = $width * $length;
        echo "The  area of a rectangle with $width X $length is $area ";
        
    }

?>