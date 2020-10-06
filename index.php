<?php
header("Content-Type:application/json");
header("Access-Controll-Allow-Origin: *");

error_reporting(E_ALL);
ini_set("display_errors", 1);

$method = $_SERVER['REQUEST_METHOD'];

switch ($method)
{
  case 'GET':
  require_once 'application/controllers/GetController.php';
  break;
  case 'POST':
  require_once 'view/post.php';
  break;
  default:
  echo "Unknown request method.";
  break;
}
