<?php # for directories
define("BURL","http://localhost:8080/project_2/medical/");
define("BURLA","http://localhost:8080/project_2/medical/admin/");
define("ASSETS","http://localhost:8080/project_2/medical/assets/");

define("BL",__DIR__.'/');
define("BLA",__DIR__.'/admin/');
session_start();
//  Database connection
require_once(BL . 'functions/db.php');
?>