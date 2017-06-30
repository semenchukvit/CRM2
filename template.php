<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Resault</title>
</head>
<body>
    <h3>Leads</h3>
    <?php
        foreach ($leadsArr as $value) {
            echo $value['salutation'] .' - '. $value['first_name'];
            echo "<br>";
        }
    ?>
    <br>
    <h3>Contacts</h3>
    <?php
        foreach ($contactsArr as $value) {
            echo $value['salutation'] .' - '. $value['last_name'];
            echo "<br>";
        }
    ?>
    <br>
    <h3>Accounts</h3>
    <?php
        foreach ($accountsArr as $value) {
            echo $value['name'];
            echo "<br>";
        }
    ?>
    <h3>Tasks</h3>
    <?php
        foreach ($tasksArr as $value) {
            echo $value['name'].', '. $value['status'].', '. $value['priority'];
            echo "<br>";
        }
    ?>
    <h3>Opportunities</h3>
    <?php
        foreach ($opportunitiesArr as $value) {
            echo $value['name'].', '. $value['amount'];
            echo "<br>";
        }
    ?>
    <h3>Users</h3>
    <?php
        foreach ($usersArr as $value) {
            echo $value['user_name'].', '. $value['status'];
            echo "<br>";
        }
    ?>
</body>
</html>