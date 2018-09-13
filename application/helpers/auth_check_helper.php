<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Codepassenger
 * Date: 8/2/2018
 * Time: 4:36 PM
 */
if ( ! function_exists('auth_check')){
    function auth_check() {
        if(!isset($_SESSION['id'])){
            redirect('Login');
        }
    }
}

