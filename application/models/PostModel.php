<?php
class PostModel{
  public function __construct(){
  }
  public function fetch($lastID){
    require 'application/config/database.php';
    $emparray = array();
    $query = mysqli_query($conn, "SELECT * FROM stocks where product_id = '$lastID'");
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
    VALUES ('$porductID', '$name', '$stock', '$date')";
    if ($conn->query($sql) === TRUE) {
      $lastID = $conn->insert_id;
      return $this->fetch($lastID);
    } else {
      return  "Error: " . $sql . "<br>" . $conn->error;
    }
  }
}
