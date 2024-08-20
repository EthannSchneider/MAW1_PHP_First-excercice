<?php

session_start();

require 'Controller/navigation.php';
require 'Controller/users_controller.php';

if (isset($_GET['action'])) {
    $action = $_GET['action'];

    switch ($action) {
        case 'home':
            home();
            break;
        case 'add_user':
            add_user();
            break;
        case 'delete_user':
            delete_user();
            break;
        case 'edit_user':
            edit_user();
            break;
        default:
            lost();
    }
} else {
    home();
}