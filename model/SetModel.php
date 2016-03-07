<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SetModel
 *
 * @author Pixie3
 */
include './connection/connection.php';

class SetModel {

    public function __construct() {
        // In here you could initialize some shared logic between this API and rest of the project
    }

    function setRecord($query) {
        $status = 0;
        if ($scheck = mysql_query($query) or die(mysql_error()) == TRUE) {
            $status = $scheck;
        }
        error_reporting(0);
        mysql_close($con);
        return $status;
    }

}
