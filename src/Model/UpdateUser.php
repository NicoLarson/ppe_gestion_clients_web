<?php

require_once "Manager.php";

class UpdateUser extends Manager
{
    function updateLine($id, $name, $firstName, $age, $email)
    {
        $response = $this->dbConnect()->query("SELECT * FROM `clients` WHERE id_client = " . $id . "");
        $data = $response->fetch();

        $name == "" ? $name = $data['nom'] : $name;
        $firstName == "" ? $firstName = $data['prenom'] : $firstName;
        $age == "" ? $age = $data['age'] : $age;
        $email == "" ? $email = $data['email'] : $email;

        $data = [
            'id' => $id,
            'name' => $name,
            'firstName' => $firstName,
            'age' => $age,
            'email' => $email,
        ];

        $req = $this->dbConnect()->prepare("UPDATE clients SET nom=:name, prenom=:firstName, age=:age, email=:email WHERE id_client=:id");
        $req->execute($data);
    }

    function updateUser()
    {
        if (isset($_POST['name'], $_POST['first-name'], $_POST['age'], $_POST['email'])) {
            $this->updateLine($_GET['userId'], $_POST['name'], $_POST['first-name'], $_POST['age'], $_POST['email']);
            header('Location: index.php');
        }
    }

    function displayFirstName($id)
    {
        $response = $this->dbConnect()->query("SELECT * FROM `clients` WHERE id_client = " . $id . "");
        $data = $response->fetch();
        return $data['nom'];
    }

    function displayLastName($id)
    {
        $response = $this->dbConnect()->query("SELECT * FROM `clients` WHERE id_client = " . $id . "");
        $data = $response->fetch();
        return $data['prenom'];
    }
    function displayAge($id)
    {
        $response = $this->dbConnect()->query("SELECT * FROM `clients` WHERE id_client = " . $id . "");
        $data = $response->fetch();
        return $data['age'];
    }
    function displayEmail($id)
    {
        $response = $this->dbConnect()->query("SELECT * FROM `clients` WHERE id_client = " . $id . "");
        $data = $response->fetch();
        return $data['email'];
    }
}
