<?php
ob_start();
?>

<form action="#" method="POST">
            <a href="index.php">Voir la liste des utilisateurs></a>
            <label for="name">Nom:</label>
            <input type="text" name="name" id="name" autofocus>
            <label for="first-name">Prénom:</label>
            <input type="text" name="first-name" id="first-name">
            <label for="age">Âge:</label>
            <input type="number" name="age" id="age">
            <label for="email">Adresse mail:</label>
            <input type="email" name="email" id="email">
            <input type="submit" value="Mettre à jour &#128394;">
        </form>
        <button>Supprimer X</button>
        
<?php
$content = ob_get_clean();
require '../templates/base.php';
?>
