<?php
const DB_HOST = ‘myhost.mysql';
const DB_USER = ‘myuser’;
const DB_PASS = 'mypassword’;
const DB_NAME = ‘mydatabasename’;

$link = new mySQLi(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if ($link->connect_error) { 
   die('Connect Error ('.$link->connect_errno.') '.$link->connect_error);
}
$link->set_charset('utf8'); 
?>