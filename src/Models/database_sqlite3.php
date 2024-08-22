<?php 
class Databasesqlite3 {
    private SQLite3 $__sqlite3;
    public function __construct() {
        $this->__sqlite3 = new SQLite3("databases.db");

        if ($this->get("SELECT name FROM sqlite_master WHERE type='table' AND name='users';") == []) {
            $this->create_database();
        }
    }

    public function modify(string $query) {
        $qry = $this->__sqlite3->prepare($query);
        if (!$qry) {
            throw new Exception("Query failed: " . $this->__sqlite3->lastErrorMsg());
        }
        $qry->execute();
    }

    public function get(string $query) {
        $result = $this->__sqlite3->query($query);
        $rows = [];
        while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
            $rows[] = $row;
        }
        return $rows;
    }

    private function create_database() {
        $this->modify("CREATE TABLE users (id INTEGER PRIMARY KEY AUTOINCREMENT, username TEXT NOT NULL UNIQUE, html_level INTEGER NOT NULL, php_base_level INTEGER NOT NULL, php_oo_level INTEGER NOT NULL, sql_level INTEGER NOT NULL);");
    }
}