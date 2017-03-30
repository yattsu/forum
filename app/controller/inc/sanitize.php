<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/forum/app/controller/checking/page_security.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/forum/app/model/database/connection.php';

class sanitize extends db_connection
{
    public function sql_input($string)
    {
        $string = mysqli_real_escape_string($this->connect(), $string);

        return $string;
    }
}

?>