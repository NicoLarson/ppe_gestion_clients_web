<?php

require_once "Manager.php";

class AddUser extends Manager
{
    function insertLine($inputName, $inputFirstName,  $inputAge, $inputEmail)
    {
        $req = $this->dbConnect()->prepare('INSERT INTO clients (nom, prenom, age, email ) VALUES( :nom, :prenom, :age, :email)');
        return $req->execute(array(
            'nom' => $inputName,
            'prenom' => $inputFirstName,
            'age' =>  $inputAge,
            'email' => $inputEmail
        ));
    }

    function isEmailExist($inputEmail)
    {
        $reqEmail = $this->dbConnect()->query("SELECT email FROM clients WHERE email = '" . $inputEmail . "'");
        $data =  $reqEmail->fetch();
        return $inputEmail == $data['email'];
    }

    function addUser()
    {
        if (isset($_POST['name'], $_POST['first-name'], $_POST['age'], $_POST['email'])) {
            if ($_POST['name'] == "" || $_POST['first-name'] == "" || $_POST['age'] == "" || $_POST['email'] == "") {
                return '<p class="warning">Veillez remplir tous les champs.</p>';
            } elseif ($_POST['age'] > 120 || $_POST['age'] < 18) {
                return '<p class="warning">Veillez vérifier l\'âge saisit.</p>';
            } elseif ($this->isEmailExist($_POST['email'])) {
                return '<p class="warning">Cette email est déjà utilisé.</p>';
            } else {
                $this->insertLine($_POST['name'], $_POST['first-name'], $_POST['age'], $_POST['email']);
                header('Location: index.php');
            }
        }
    }
}
