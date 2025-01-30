<?php
include_once 'Database.php';
include_once 'User.php';

class UserRepo{
  public $connection;

  function __construct(){
    $conn =new Database();
    $this->connection=$conn->getConnection();
  }

function insertUser($user) {
  $conn = $this->connection;


  $id = $user->getId();
  $first_name = $user->getFirstName();
  $last_name = $user->getLastName();
  $username = $user->getUsername();
  $email = $user->getEmail();
  $password = $user->getPassword();


  $sql = "INSERT INTO user (id, first_name, last_name, username, email,password) VALUES (?,?,?,?,?,?)";

  $statement = $conn->prepare($sql); 


  $statement->execute([$id, $first_name, $last_name, $username, $email, $password]);
  if($statement->execute()){
    return true;
  }
  return false;

 
  echo "<script> alert('User has been inserted successfully!'); </script>";
}

function getAllUsers() {
  $conn = $this->connection;
  $sql = "SELECT * FROM user";
  $statement = $conn->prepare($sql);
  $statement->execute();
  return $statement->fetchAll(PDO::FETCH_ASSOC); // ✅ Fix: Ensures an associative array is returned
}

function getUserById($id) {
  $conn = $this->connection;


  $sql = "SELECT * FROM user WHERE id='$id'";

  $statement = $conn->prepare($sql); 
  $user = $statement->fetch(); 

  return $user;
}

function updateUser($id, $first_name, $last_name,  $username,$email, $password) {
  $conn = $this->connection;


  $sql = "UPDATE user SET first_name=?, last_name=?,  username=?,email=?, password=? WHERE id=?";

  $statement = $conn->prepare($sql); 


  $statement->execute([$first_name, $last_name, $username, $email, $password, $id]);

  if($statement->execute()){
    return true;
  }
  return false;
  echo "<script>alert('Update was successful');</script>";
}
function deleteUser($id) {
  $conn = $this->connection;


  $sql = "DELETE FROM user WHERE id=?";

  $statement = $conn->prepare($sql); 

 
  $statement->execute([$id]);
  if($statement->execute()){
    return true;
  }
  return false;

 
  echo "<script>alert('Delete was successful');</script>";
}
}


?>





