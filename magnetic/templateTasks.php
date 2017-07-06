<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Resault</title>
</head>
<body>
    <h3>Tasks</h3>
    <?php
        foreach ($dataArr as $value) {
            echo $value['name'].', '. $value['status'].', '. $value['priority'];
            echo "<br>";
        }
    ?>
</body>
</html>