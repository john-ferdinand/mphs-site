<?php
/**
 * Created by PhpStorm.
 * User: Jordan
 * Date: 4/23/2018
 * Time: 7:04 PM
 */

class UIUtil {
    function redirect($url) {
        ob_start();
        header('Location: '.$url);
        ob_end_flush();
        die();
    }
} 