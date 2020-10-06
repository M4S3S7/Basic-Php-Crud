<?php
include_once 'application/config/database.php';
include_once 'application/config/config.php';

class GetModel{

  public function __construct(){
    parent::__construct();
  }

  public function fetch(){
    $query = mysql_query("SELECT * FROM stocks");
    if ( mysql_affected_rows() ){
      while ( $row = mysql_fetch_assoc($query) ){
        return $row;
      }
    }
  }

}
