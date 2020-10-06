<?php
include_once 'application/config/database.php';
include_once 'application/config/config.php';
include_once 'application/models/GetModel.php';
class HomeController{
  public function __construct(){
    parent::_construect();
    $getModels = new GetModels();
    header('Access-Control-Allow-Origin: *');
    header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
    header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
  }
  public function get(){
    $deneme = $this->getModels->fetch();
  }
}
