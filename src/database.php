<?php
/**
 * Created by PhpStorm.
 * User: James.Nunnerley
 * Date: 30/01/2019
 * Time: 11:15
 */

class database extends mysqli
{
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
        $this->link = new mysqli($this->host, $this->username, $this->password, $this->database);
        if ($this->link->connect_error()) {
            die('Connect Error (' . $this->link->connect_errno() . ') '
                . $this->link->connect_error());
            exit;
        } else {
            return true;
        }
    }
}