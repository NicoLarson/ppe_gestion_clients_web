<?php

require ('../src/Controller/frontend.php');


if (isset($_GET['action'])) {
    if ($_GET['action'] == 'addUser') {
        addUser();
    } elseif ($_GET['action'] == 'updateUser') {
        updateUser();
    }
} else {
    listUser();
}