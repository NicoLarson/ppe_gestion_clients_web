<?php

require_once '../src/Model/AddUser.php';
require_once '../src/Model/DisplayUsers.php';
require_once '../src/Model/RemoveUser.php';
require_once '../src/Model/UpdateUser.php';


function listUser()
{
    $displayUsers = new DisplayUsers();
    require '../templates/admin/listUserView.php';
}

function addUser()
{
    $addUser = new AddUser();
    $addUser->addUser();
    require '../templates/admin/addUserView.php';
}

function updateUser()
{
    $updateUser = new UpdateUser();
    $updateUser->updateUser();
    require '../templates/admin/updateUserView.php';
}

function removeUser()
{
    $removeUser = new RemoveUser();
    $removeUser->removeUser($_GET['delete']);
    header('Location:index.php');
}
