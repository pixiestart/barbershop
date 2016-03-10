<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Controller
 *
 * @author Pixie3
 */
require '../model/GetModel.php';
require '../model/SetModel.php';

class Controller {

    public function __construct() {
// In here you could initialize some shared logic between this API and rest of the project
    }

    /**
     * @param directory $name Set Directory Listing Here 
     * Directory Controller
     * Enter Pagename and part to redirect to the specified page.     
     */
    function setDirectory($dirName) {
        if (isset($dirName)) {
            if ($dirName === "home") {
                header("location: ./content/home");
            } else if ($dirName === "contact") {
                header("location: ./content/contact");
            } else if ($dirName === "about") {
                header("location: ./content/about");
            } else {
                
            }
        } else {
            header("location: ./content/home");
        }
    }

    /**
     * @param Terminate All Sessions
     */
    function terminateAllSessions() {
        session_unset();
        session_destroy();
    }

    /**
     * @param Three way MD5 Encryption
     */
    function md5_ThreeWayEncryption($value) {
        return md5(md5(md5($value)));
    }

    function login($username, $passwords) {
        $query = "SELECT `email` FROM  `users` WHERE  `username` = '$username' AND `password`='$password'";
        return $this->retrieveGetArray($query);
    }

    function checkExistingUser($username) {
        $query = "SELECT `email` FROM  `users` WHERE  `email` = '$username'";
        return $this->retrieveGetArray($query);
    }

    function changePassword($password) {
        $query = "SELECT `email` FROM  `users` WHERE  `email` = '$username'";
    }

    function requestPassword($email) {
        $query = "SELECT `email` FROM  `users` WHERE  `email` = '$email'";
    }

    function retrieveGetArray($query) {
        $getModel = new GetModel();
        return $getModel->getArrayRecords($query);
    }
    

    function getTime_Date_TimeStap($t) {
        $return = "NULL";
        if ($t == "t") {
            $d = date("h");
            $d += 1;
            $return = $d . ":" . date("i:sA");
        } else if ($t == "d") {
            $mydate = getdate(date("U"));
            $return = "$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year]";
        } else if ($t == "s") {
            $mydate = getdate(date("U"));
            $return = "$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year]";
            $tm = date("h");
            $tm += 1;
            $return .= " " . $tm . ":" . date("i:sA");
        } else {
            return $return;
        }
        return $return;
    }

    function idGenerator() {
        return date("smYdhi");
    }

    function getBaseURL() {
        $domain = str_replace('www.', '', $_SERVER['HTTP_HOST']);
        return $domain . $_SERVER["REQUEST_URI"];
    }

    /**
     * @param directory $name Set APIs Here
     */
}
