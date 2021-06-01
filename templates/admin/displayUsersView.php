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
        <ul>
            <?php
            while ($data = $response->fetch()) {
            ?>
                <li>
                    <tr>
                        <td> <a href="index.php?action=update&id= <?= $data['id_client'] ?> "><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path d="M18.311 2.828l2.862 2.861-15.033 15.032-3.583.722.723-3.584 15.031-15.031zm0-2.828l-16.873 16.872-1.438 7.127 7.127-1.437 16.874-16.873-5.69-5.689z" />
                                </svg> modifier</a>
                            ou
                            <a href="index.php?action=delete&id=  <?= $data['id_client'] ?> "> &#10799; supprimer</a>
                        </td>
                        <td> <?= $data['nom'] ?> </td>
                        <td> <?= $data['prenom'] ?> </td>
                        <td> <?= $data['age'] ?> </td>
                        <td> <?= $data['email'] ?> </td>
                    </tr>
                </li>
            <?php } ?>
        </ul>
    </tbody>
</table>
<a href="index.php?action=add">+ Ajouter un client</a>

<?php
$content = ob_get_clean();
require '../templates/base.php';
?>