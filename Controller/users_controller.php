<?php
function add_user() {
    if(isset($_POST['name'])) {
        $users_instance = new Users();
        $users_instance->add_user($_POST['name']);

        header('Location: /');
    }
    lost();
}

function delete_user() {
    if(isset($_POST['name'])) {
        $users_instance = new Users();
        $users_instance->delete_user($_POST['name']);

        header('Location: /');
    }
    lost();
}

function edit_user() {
    if(isset($_POST['name']) && isset($_POST['html_level']) && isset($_POST['php_base_level']) && isset($_POST['php_oo_level']) && isset($_POST['sql_level'])) {
        $users_instance = new Users();
        $users_instance->edit_user($_POST['name'], $_POST['html_level'], $_POST['php_base_level'], $_POST['php_oo_level'], $_POST['sql_level']);

        header('Location: /');
    }
    lost();
}