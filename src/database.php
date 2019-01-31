<?php
/**
 * Created by PhpStorm.
 * User: James.Nunnerley
 * Date: 30/01/2019
 * Time: 11:15
 */

class database {
    private $host = "";
    private $database_name = "";
    private $username = "";
    private $password = "";
    private $tables = array(
        "games" => "games",
        "users" => "users",
        "gameTypes" => "gameTypes"
    );
    public $database;

    public function __construct($dbSettings) {

        $this->host     = $dbSettings["host"];
        $this->database_name = $dbSettings["database"];
        $this->username = $dbSettings["username"];
        $this->password = $dbSettings["password"];

        $this->database = new mysqli ($this->host, $this->username, $this->password, $this->database_name);

        if ($this->database->connect_errno) {

            die('Connect Error (' . $this->database->connect_errno . ') '
                . $this->database->connect_error);
            exit;

        } else {

            return $this;

        }
    }

    public function select ($table, $fields, $where) {

        $sql = "SELECT `" . implode("`,`",$fields) . "` FROM " . $this->database_name . "." . $this->escape($this->tables[$table]) . " " . $where;

        return $this->runQuery($sql);

    }

    public function numRows ($result) {

        return $result->num_rows;

    }

    public function fetch ($result) {

        return $this->database->fetch_assoc($result);

    }

    public function escape ($variable, $includeQuotes = true) {

        if ($includeQuotes) {

            return "'" . $this->database->escape_string($variable) . "'";

        } else {

            return $this->database->escape_string($variable);

        }



    }

    private function runQuery ($sql) {

        return $this->database->query($sql);

    }

}