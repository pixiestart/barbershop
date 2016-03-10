<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of GetModel
 *
 * @author Pixie3
 */
include '../connection/connection.php';

class GetModel {

    public function __construct() {
        // In here you could initialize some shared logic between this API and rest of the project
    }

    function getRecords($query) {
        $status = 0;
        $retval = mysql_query($query);
        while ($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
            $status = $row;
        }
        error_reporting(0);
        mysql_close($con);
        return $status;
    }

    function getJSONRecords($query) {
        $retval = mysql_query($query);
        $ar = array();
        while ($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
            $ar[] = $row;
        }
        error_reporting(0);
        mysql_close($con);
        return json_encode($ar);
    }

    function getArrayRecords($query) {
        $retval = mysql_query($query);
//        $ar = array();
        while ($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
//            $ar[] = $row;
            return $row;
        }
        error_reporting(0);
        mysql_close($con);
        return 'null';
    }

}
