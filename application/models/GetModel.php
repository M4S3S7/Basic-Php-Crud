<?php
class GetModel{

  public function __construct(){
  }
  public function fetch(){
    require 'application/config/database.php';
    $emparray = array();
    $query = mysqli_query($conn, "SELECT * FROM stocks where name != ''");
    if (mysqli_affected_rows($conn)){
      while ( $row = mysqli_fetch_assoc($query) ){
       $emparray[] = $row;
     }
     return $emparray;
   }else {
     return null;
   }
  }
}
