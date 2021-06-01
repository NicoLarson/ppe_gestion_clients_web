<?php

class Manager
{
    protected function dbConnect()
    {
        try {
            $db = new PDO('mysql:host=localhost;dbname=client_ligue', 'nicolas', 'nicolas', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            return $db;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }

    public function displayUsers()
    {
        return $this->dbConnect()->query('SELECT * FROM `clients`');
    }
    public function addUser(string $lastName, string $firstName, int $age, string $email)
    {
        $req = $this->dbConnect()->prepare('INSERT INTO clients (nom, prenom, age, email ) VALUES( :nom, :prenom, :age, :email)');
        return $req->execute(array(
            'nom' => $lastName,
            'prenom' => $firstName,
            'age' =>  $age,
            'email' => $email
        ));
    }

    public function findUserById(int $id)
    {
        return $this->dbConnect()->query('SELECT * FROM `clients` WHERE id_client = ' . $id . '');
    }
    
    public function isEmailExist(string $email)
    {
        $data = $this->dbConnect()->query('SELECT email FROM clients WHERE email = "' . $email . '"')->fetch();
        return $data['email'] == $email;
    }

    public function deleteUser(int $id)
    {
        $req = $this->dbConnect()->prepare("DELETE FROM clients WHERE id_client =  :id");
        $req->execute(array(
            'id' => $id
        ));
    }

    public function updateUser(int $id, string $lastName, string $firstName, int $age, string $email)
    {
        $req = $this->dbConnect()->prepare('UPDATE clients SET  nom = :nom, prenom = :prenom, age = :age, email = :email WHERE id_client = ' . $id . '');
        $req->execute(array(
            'nom' => $lastName,
            'prenom' => $firstName,
            'age' =>  $age,
            'email' => $email
        ));
    }
}
