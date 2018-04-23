<?php
/**
 * Created by PhpStorm.
 * User: Jordan
 * Date: 4/23/2018
 * Time: 2:01 PM
 */

interface UserDao {
    function getUserId($lastName,$firstName,$middleName);
    function getUserBy($userId);
} 