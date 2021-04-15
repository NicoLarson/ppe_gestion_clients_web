<?php

require_once "Manager.php";

class RemoveUser extends Manager
{
    function removeUser($id)
    {
        $req = $this->dbConnect()->prepare("DELETE FROM clients WHERE id_client =  :id");
        $req->execute(array(
            'id' => $id
        ));
    }
}
