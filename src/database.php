<?php
/**
 * Created by PhpStorm.
 * User: James.Nunnerley
 * Date: 30/01/2019
 * Time: 11:15
 */

class database {
    private $host = "";
    private $database = "";
    private $username = "";
    private $password = "";
    public $link;

    public function __construct($dbSettings) {
        $this->host = $dbSettings->database["host"];
        $this->database = $dbSettings->database["host"];
        $this->username = $dbSettings->database["host"];
        $this->password = $dbSettings->database["host"];

        if ($this->link = mysql_connect ($this->host, $this->username, $this->password, $this->database)) {
            die('Connect Error (' . $this->link->connect_errno() . ') '
                . $this->link->connect_error());
            exit;
        } else {
            return true;
        }
    }
}