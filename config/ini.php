<?php
 /**error_reporting(E_ALL); comment this line to without DEBUG appear **/
header("Content-Type: text/html; charset=utf-8", true);
mb_internal_encoding("UTF-8");
mb_regex_encoding("UTF-8");

/** Global settings **/
define("PARENT_METHOD", $_SERVER['REQUEST_METHOD']);

/** Portal settings **/
define("PORTAL_NAME", "Econometrix");
define("EMAIL_NAME", "custodioneto86@gmail.com");
define("URL_PORTAL", "http://www.econometrix.com.br");
define("DOMAIN_PORTAL", "http://www.econometrix.com.br");
define("EMAIL_ACCOUNT_SERVER", "smtp.gmail.com");
define("INTERNAL_ROOT_PORTAL", $_SERVER['DOCUMENT_ROOT']);
define("EXTERNAL_ROOT_PORTAL", "http://" . $_SERVER['HTTP_HOST']);

/** Images/Thumbs settings **/
define("MAX_WIDTH_THB", 75);
define("MAX_HEIGHT_THB", 75);
define("MAX_WIDTH_IMG", 450);
define("MAX_HEIGHT_IMG", 400);

/** MySQL settings **/
define("MYSQL_HOST", "localhost");
define("MYSQL_USER", "root");
define("MYSQL_PASS", "root");
define("MYSQL_BASE", "econometrix");
define("MYSQL_BASE_USUARIOS", "econ_usuarios");

