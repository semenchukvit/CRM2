<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Resault</title>
</head>
<body>
    <h3>Contacts</h3>
    <?php
        foreach ($dataArr as $value) {
            echo $value['salutation'] .' - '. $value['last_name'];
            echo "<br>";
        }
    ?>
    <br>
</body>
</html>