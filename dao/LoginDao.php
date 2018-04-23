<?php
/**
 * Created by PhpStorm.
 * User: Jordan
 * Date: 4/23/2018
 * Time: 1:21 PM
 */

interface LoginDao {
    function isValid(User $user);
} 