<?php

class myPDO extends PDO {

    public function __construct($DatabaseServer = "", $DatabaseUserName = "", $DatabasePassword = "", $DatabaseName = "") {
        $DatabaseDns = ($DatabaseName) ? "mysql:host={$DatabaseServer};dbname={$DatabaseName}" : "mysql:host={$DatabaseServer}";
        parent::__construct($DatabaseDns, $DatabaseUserName, $DatabasePassword, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }

}

?>