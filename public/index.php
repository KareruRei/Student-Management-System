<?php
require "../config.php";
require "../core/Database.php";
require "../core/Model.php";
require "../core/Controller.php"; 
require "../app/models/Student.php";
require "../app/controllers/StudentController.php";

$action = $_GET['action'] ?? "index";

$controller = new StudentController();
$controller->$action();
