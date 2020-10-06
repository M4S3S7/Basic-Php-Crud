<?php
header("Content-Type:application/json");
header("Access-Controll-Allow-Origin: *");


$method = $_SERVER['REQUEST_METHOD'];

function parseInput()
{
  $data = file_get_contents("php://input");

  if($data == false)
  return array();

  parse_str($data, $result);

  return $result;
}

switch ($method)
{
  case 'GET':
  echo "GET request method\n";
  echo print_r($_GET, true);
  break;
  case 'POST':
  echo "POST request method\n";
  echo print_r($_POST, true);
  break;
  default:
  echo "Unknown request method.";
  break;
}
