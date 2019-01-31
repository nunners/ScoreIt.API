<?php
/**
 * Created by PhpStorm.
 * User: James.Nunnerley
 * Date: 31/01/2019
 * Time: 15:38
 */

class User
{
    private $database;
    public $id;
    public $info;

    public function __construct($database)
    {

        $this->database = $database;
        return $this;

    }

    public function setUser($id) {

        //check the user exists
        $result = $this->database->select(array("id","firstname","lastname","email"), "users", "WHERE id=".$database->escape($id));

        print_r($result);

        echo ("Num rows".$this->database->numRows($result));

        print_r($this->database->fetch($result));

        return true;

    }
}