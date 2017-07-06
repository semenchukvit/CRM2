<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Resault</title>
</head>
<body>
    <h3>Opportunities</h3>
    <?php
        foreach ($opportunitiesArr as $value) {
            echo $value['name'].', '. $value['amount'];
            echo "<br>";
        }
    ?>
</body>
</html>