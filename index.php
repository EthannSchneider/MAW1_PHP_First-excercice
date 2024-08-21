<?php

session_start();

require 'Controller/navigation.php';
require 'Controller/users_controller.php';

$redirect_uri = $_SERVER['REQUEST_URI'] ?? '/';

$redirect_uri = explode('?', $redirect_uri)[0];

switch ($redirect_uri) {
    case '/':
        home();
        break;
    case '/api/users':
        add_user();
        break;
    case '/api/users/delete':
        delete_user();
        break;
    case '/api/users/edit':
        edit_user();
        break;
    default:
        lost();
}