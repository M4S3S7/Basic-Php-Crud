<?php
class PostModel{
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
  public function insert($name, $stock, $date){
    require 'application/config/database.php';
    $sql = "INSERT INTO stocks (name, stock, created_date)
    VALUES ($name, $stock, $date)";
    if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  }
}
