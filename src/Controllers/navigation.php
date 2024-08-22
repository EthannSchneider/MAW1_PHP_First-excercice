<?php 
require 'Models/users.php';

function home() {
    $users_instance = new Users();
    $users = $users_instance->get_all_users();
    require 'Views/home.php';
}

function lost() {
    require 'Views/lost.php';
    http_response_code(404);
}
