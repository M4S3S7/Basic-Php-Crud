<?php
header("Content-Type:application/json");
header("Access-Controll-Allow-Origin: *");

error_reporting(E_ALL);
ini_set("display_errors", 1);

$method = $_SERVER['REQUEST_METHOD'];

switch ($method)
{
  case 'GET':
  include_once 'application/controllers/GetController.php';
  $get = new GetController();
  $get->get();
  break;
  case 'POST':
  include_once 'application/controllers/GetController.php';
  echo "string";
  break;
  default:
  echo "Unknown request method.";
  break;
}
