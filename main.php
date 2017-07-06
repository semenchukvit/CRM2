<?php

require_once(__DIR__ . '/magnetic/Database.php');

$url = substr($_SERVER['REQUEST_URI'],strrpos($_SERVER['SCRIPT_NAME'],'/')+1);
$urlArr = explode('/', $url);

$method = $urlArr[0];
$table = $urlArr[1];

if ($method == 'get' && !empty($table)) {
    $connection = new Database();
    $dataArr = $connection->get($table);
} else {
    echo 'Wrong URI'."<br>";
}

switch ($table) {
    case 'leads':
        require_once (__DIR__.'/magnetic/templateLeads.php');
        break;
    case 'contacts':
        require_once (__DIR__.'/magnetic/templateContacts.php');
        break;
    case 'accounts':
        require_once (__DIR__.'/magnetic/templateAccounts.php');
        break;
    case 'tasks':
        require_once (__DIR__.'/magnetic/templateTasks.php');
        break;
    case 'opportunities':
        require_once (__DIR__.'/magnetic/templateOpportunities.php');
        break;
    case 'users':
        require_once (__DIR__.'/magnetic/templateUsers.php');
        break;
    default:
        echo "Template not found";
}
