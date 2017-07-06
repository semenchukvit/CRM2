<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Resault</title>
</head>
<body>
    <h3>Leads</h3>
    <?php
        foreach ($dataArr as $value) {
            echo $value['salutation'] .' - '. $value['first_name'];
            echo "<br>";
        }
    ?>
</body>
</html>