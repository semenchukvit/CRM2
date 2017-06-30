<?php

require_once(__DIR__.'/Database.php');

$connection = new Database();
$leadsArr = $connection->get('leads');
$contactsArr = $connection->get('contacts');
$accountsArr = $connection->get('accounts');
$tasksArr = $connection->get('tasks');
$opportunitiesArr = $connection->get('opportunities');
$usersArr = $connection->get('users');

require_once (__DIR__.'/template.php');