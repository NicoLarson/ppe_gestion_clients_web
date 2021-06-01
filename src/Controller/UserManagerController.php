<?php

require_once '../src/Model/Manager.php';
require_once '../src/Model/User.php';

class UserManagerController
{
    private string $alert = '<p class="no-alert"></p>';

    public function displayUsers()
    {
        $db = new Manager();
        $response = $db->displayUsers();
        require '../templates/admin/displayUsersView.php';
    }

    public function addUser()
    {
        $db = new Manager();

        if (isset($_POST['name'], $_POST['first-name'], $_POST['age'], $_POST['email'])) {
            if ($_POST['name'] == "" || $_POST['first-name'] == "" || $_POST['age'] == "" || $_POST['email'] == "") {
                $this->alert = '<p class="alert">Veuillez remplir tous les champs</p>';
            } elseif (is_numeric($_POST['name']) || is_numeric($_POST['first-name']) || is_numeric($_POST['email'])) {
                $this->alert = '<p class="alert">Veuillez verifier vos saisie</p>';
            } elseif (!is_numeric($_POST['age']) || ($_POST['age'] < 18 || $_POST['age'] > 99)) {
                $this->alert = '<p class="alert">Veuillez verifier l\'âge</p>';
            } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                $this->alert = '<p class="alert">Veuillez verifier la saisie de l\'email</p>';
            } elseif ($db->isEmailExist($_POST['email'])) {
                $this->alert = '<p class="alert">Cette email déjà utilisé</p>';
            } else {
                $db->addUser($_POST['name'], $_POST['first-name'], $_POST['age'], $_POST['email']);
                header('Location:index.php');
            }
        }
        require '../templates/admin/addUserView.php';
    }

    public function deleteUser()
    {
        $db = new Manager();
        $db->deleteUser($_GET['id']);
        header('Location:index.php');
    }

    public function updateUser()
    {
        $db = new Manager();
        $data = $db->findUserById($_GET['id'])->fetch();

        if (isset($_POST['name'], $_POST['first-name'], $_POST['age'], $_POST['email'])) {
            if ($_POST['name'] == "" || $_POST['first-name'] == "" || $_POST['age'] == "" || $_POST['email'] == "") {
                $this->alert = '<p class="alert">Veuillez remplir tous les champs</p>';
            } elseif (is_numeric($_POST['name']) || is_numeric($_POST['first-name']) || is_numeric($_POST['email'])) {
                $this->alert = '<p class="alert">Veuillez verifier vos saisie</p>';
            } elseif (!is_numeric($_POST['age']) || ($_POST['age'] < 18 || $_POST['age'] > 99)) {
                $this->alert = '<p class="alert">Veuillez verifier l\'âge</p>';
            } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                $this->alert = '<p class="alert">Veuillez verifier la saisie de l\'email</p>';
            } elseif ($db->isEmailExist($_POST['email']) && $_POST['email'] != $data['email']) {
                $this->alert = '<p class="alert">Cette email déjà utilisé</p>';
            } else {
                $db->updateUser($_GET['id'], $_POST['name'], $_POST['first-name'], $_POST['age'], $_POST['email']);
                header('Location:index.php');
            }
        }
        require '../templates/admin/updateUserView.php';
    }
}
