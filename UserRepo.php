<?
include_once 'Database.php';

class UserRepo{
  private $connection;

  function __construct(){
    $conn =new Database();
    $this->connection=$conn->getConnection();
  }
  function __construct($id, $first_name, $last_name, $username, $email, $password) {
    $this->id = $id;              
    $this->first_name = $first_name;           
    $this->last_name = $last_name;    
    $this->username = $username;        
    $this->email = $email;  
    $this->password = $password;   
}
function getID(){
  return $this->id;
}
function getFirstName(){
  return $this->first_name;
}
function getLastName(){
  return $this->last_name;
}
function getUsername(){
  return $this->username;
}
function getEmail(){
  return $this->email;
}
function getPassword(){
  return $this->password;
  
}function insertUser($user) {
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

 
  echo "<script> alert('User has been inserted successfully!'); </script>";
}
function getAllUsers() {
  $conn = $this->connection;

  $sql = "SELECT * FROM user";

  $statement = $conn->query($sql); 
  $users = $statement->fetchAll(); 

  return $users; 
}

function getUserById($id) {
  $conn = $this->connection;


  $sql = "SELECT * FROM user WHERE id='$id'";

  $statement = $conn->query($sql); 
  $user = $statement->fetch(); 

  return $user;
}

function updateUser($id, $name, $surname, $email, $username, $password) {
  $conn = $this->connection;


  $sql = "UPDATE user SET first_name=?, last_name=?,  username=?,email=?, password=? WHERE id=?";

  $statement = $conn->prepare($sql); 


  $statement->execute([$first_name, $last_name, $username, $email, $password, $id]);


  echo "<script>alert('Update was successful');</script>";
}
function deleteUser($id) {
  $conn = $this->connection;


  $sql = "DELETE FROM user WHERE id=?";

  $statement = $conn->prepare($sql); 

 
  $statement->execute([$id]);

 
  echo "<script>alert('Delete was successful');</script>";
}
}


?>




