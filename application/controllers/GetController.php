<?php
include_once 'application/config/database.php';
include_once 'application/config/config.php';
include_once 'application/models/GetModel.php';

class GetController{
  public function __construct(){
    header('Access-Control-Allow-Origin: *');
    header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
    header("Access-Control-Allow-Methods: GET");
  }

  public function get(){
    $getModels = new GetModel();
    $stocksGet = $getModels->fetch();
    $data = array();
    if($stocksGet != null){
      $data = array('code' => '0', 'msg' => 'success', 'data' => $stocksGet);
      http_response_code(200);
      print_r(json_encode($data));
    }else {
      $data = array('code' => '1', 'msg' => 'error', 'data' => $stocksGet);
      http_response_code(501);
      print_r(json_encode($data));
    }
  }
}
