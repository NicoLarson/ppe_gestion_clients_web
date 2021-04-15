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
            <?= $displayUsers->showUsers(); ?>
        </ul>

    </tbody>
</table>
<a href="index.php?action=addUser">+ Ajouter un client</a>

<?php
$content = ob_get_clean();
require '../templates/base.php';
?>