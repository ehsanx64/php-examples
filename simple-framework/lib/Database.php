<?php
class Database extends mysqli {
    private $user = 'root';
    private $pass = '';
    private $name = 'phptest';
    private $host = 'localhost';

    private $sqli;

    public function __construct() {
        $this->sqli = new mysqli(
            $this->host,
            $this->user,
            $this->pass,
            $this->name
        );
    }

    public function query($sql, $result_mode = null) {
        $result = $this->sqli->query($sql);

        if (!$result) {
            return null;
        }

        if ($result->num_rows < 1) {
            return false;
        }

        return $result->fetch_assoc();
    }
}