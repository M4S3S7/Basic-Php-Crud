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
  public function insert($porductID, $name, $stock, $date){
    require 'application/config/database.php';
    $sql = "INSERT INTO stocks (product_id, name, stock, created_date)
    VALUES ($porductID, $name, $stock, $date)";
    if ($conn->query($sql) === TRUE) {
      $last_id = $conn->insert_id;
      echo "New record created successfully. Last inserted ID is: " . $last_id;
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }
}
