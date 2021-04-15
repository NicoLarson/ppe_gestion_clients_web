<?php
ob_start();
?>

<form action="#" method="POST">
    <a href="index.php">Voir la liste des utilisateurs<i class="fas fa-chevron-right"></i></a>
    <?= $updateUser->updateUser() ?>
    <label for="name">Nom:</label>
    <input type="text" name="name" id="name" placeholder="<?= $updateUser->displayLastName($_GET['userId']) ?>" autofocus>
    <label for="first-name">Prénom:</label>
    <input type="text" name="first-name" id="first-name" placeholder="<?= $updateUser->displayFirstName($_GET['userId']) ?>">
    <label for="age">Âge:</label>
    <input type="text" name="age" id="age" placeholder="<?= $updateUser->displayAge($_GET['userId']) ?>">
    <label for="email">Adresse mail:</label>
    <input type="email" name="email" id="email" placeholder="<?= $updateUser->displayEmail($_GET['userId']) ?>">
    <button type="submit">Mettre à jour <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#fafafa" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></button>
</form>
<p><a class="delete" href="index.php?action=removeUser&delete=<?= $_GET['userId'] ?>">Supprimer &#10799;</a></p>
<?php
$content = ob_get_clean();
require '../templates/base.php';
?>