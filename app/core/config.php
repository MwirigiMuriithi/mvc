<?php
/*config.php*/
defined('ROOTPATH') or exit('Access Denied!');
if($_SERVER['SERVER_NAME']== 'localhost')
{
    define("ROOT","http://localhost/mvc/public");
    //database  config
    define("DBNAME","messenger");
    define("DBHOST","localhost");
    define("DBUSER","root");
    define("DBPASSWORD","");
    define("DBDRIVER","");
}else{
    define("ROOT","https://www.mywebsite.com");
    //database  config
    define("DBNAME","messenger");
    define("DBHOST","localhost");
    define("DBUSER","root");
    define("DBPASSWORD","");
    define("DBDRIVER","");
}

define("APP_NAME","Website");

define ("DEBUG","true");
