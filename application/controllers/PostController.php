<?php
include_once 'application/config/database.php';
include_once 'application/config/config.php';
include_once 'application/models/PostModel.php';

class PostController{
  public function __construct(){
    header('Access-Control-Allow-Origin: *');
    header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
    header("Access-Control-Allow-Methods: POST");
  }


  public function post(){
    $json      = file_get_contents('php://input');
    $data      = json_decode($json);
    


  }


  // public function post(){
  //   $getModels = new PostModel();
  //   $stocksGet = $getModels->fetch();
  //   $data = array();
  //   if($stocksGet != null){
  //     $data = array('code' => '0', 'msg' => 'success', 'data' => $stocksGet);
  //     http_response_code(200);
  //     print_r(json_encode($data));
  //   }else {
  //     $data = array('code' => '1', 'msg' => 'error', 'data' => $stocksGet);
  //     http_response_code(501);
  //     print_r(json_encode($data));
  //   }
  // }
}
