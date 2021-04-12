<?php
ob_start();
?>
 <table>
            <thead>
                <tr>
                    <th>Identifiant</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Age</th>
                    <th>Adresse Mail</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td> <a href="index.php?action=updateUser">&#128394; modifier</a> ou &#10799; supprimer</td>
                    <td>Eich</td>
                    <td>Branden</td>
                    <td>55</td>
                    <td>brand67@gmail.com</td>
                </tr>
                <tr>
                    <td> <a href="index.php?action=updateUser">&#128394; modifier</a> ou &#10799; supprimer</td>
                    <td>Leford</td>
                    <td>Rasmus</td>
                    <td>55</td>
                    <td>rasmus@php.net</td>
                </tr>
                <tr>
                    <td> <a href="index.php?action=updateUser">&#128394; modifier</a> ou &#10799; supprimer</td>
                    <td>Berners Lee</td>
                    <td>Tim</td>
                    <td>70</td>
                    <td>tim@w3c.net</td>
                </tr>
            </tbody>
        </table>
        <a href="index.php?action=addUser">+ Ajouter un client</a>

<?php
$content = ob_get_clean();
require '../templates/base.php';
?>
