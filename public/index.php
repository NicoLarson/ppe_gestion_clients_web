<?php

require '../src/Controller/UserManagerController.php';

$controller = new UserManagerController();

if (isset($_GET['action'])) {
    if ($_GET['action'] == 'add') {
        $controller->addUser();
    } elseif ($_GET['action'] == 'delete') {
        $controller->deleteUser();
    } elseif ($_GET['action'] == 'update') {
        $controller->updateUser();
    }
} else {
    $controller->displayUsers();
}
