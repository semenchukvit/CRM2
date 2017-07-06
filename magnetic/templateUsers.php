<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Resault</title>
</head>
<body>
    <h3>Users</h3>
    <?php
        foreach ($dataArr as $value) {
            echo $value['user_name'].', '. $value['status'];
            echo "<br>";
        }
    ?>
</body>
</html>