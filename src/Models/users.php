<?php 

require 'Models/database_sqlite3.php';

class Users {
    private Databasesqlite3 $databases;

    public function __construct() {
        $this->databases = new Databasesqlite3();
    }

    public function get_all_users() {
        return $this->databases->get("SELECT username, html_level, php_base_level, php_oo_level, sql_level FROM users;");
    }
    
    public function add_user(string $name) {
        $this->databases->modify("INSERT INTO users(username, html_level, php_base_level, php_oo_level, sql_level) VALUES ('$name',1,1,1,1);");
    }

    public function delete_user(string $name) {
        $this->databases->modify("DELETE FROM users WHERE username='$name';");
    }

    public function edit_user(string $name, int $html_level, int $php_base_level, int $php_oo_level, int $sql_level) {
        $this->databases->modify("UPDATE users SET html_level=$html_level, php_base_level=$php_base_level, php_oo_level=$php_oo_level, sql_level=$sql_level WHERE username='$name';");
    }
}
