<?php 
require 'Model/users.php';

function home() {
    $users_instance = new Users();
    $users = $users_instance->get_all_users();
    require 'View/home.php';
}

function lost() {
    require 'View/lost.php';
}
