<?php
require_once 'Manager.php';

class DisplayUsers extends Manager
{
    function showUsers()
    {
        $response = $this->dbConnect()->query('SELECT * FROM `clients`');
        while ($data = $response->fetch()) {
            echo ' 
            <li><tr>
            <td> <a href="index.php?action=updateUser&userId=' . $data['id_client'] . '"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M18.311 2.828l2.862 2.861-15.033 15.032-3.583.722.723-3.584 15.031-15.031zm0-2.828l-16.873 16.872-1.438 7.127 7.127-1.437 16.874-16.873-5.69-5.689z"/></svg> modifier</a> 
            ou  
            <a href="index.php?action=removeUser&delete=' . $data['id_client']  . '"> &#10799; supprimer</a></td>
            <td>' . $data['nom'] . '</td>
            <td>' . $data['prenom'] . '</td>
            <td>' . $data['age'] . '</td>
            <td>' . $data['email'] . '</td>
            </tr></li>
            ';
        }
    }
}
