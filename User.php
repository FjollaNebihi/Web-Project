<?php
class User{
  private $conn;
  private $table_name='user';

  public function __construct($db){
    $this->conn=$db;
  }
  public function Register($first_name,$last_name,$username,$email,$password){
    $query="INSERT INTO {$this->table_name} (first_name,last_name,username,email,password) VALUES ( :first_name, :last_name , :username , :email , :password) ";
    $statement=$this->conn->prepare($query);

    $statement->bindParam(':first_name', $first_name);
    $statement->bindParam(':last_name', $last_name);
    $statement->bindParam(':username', $username);
    $statement->bindParam(':email' , $email);
    $statement->bindParam(':password', password_hash($password, PASSWORD_DEFAULT)); //Kjo mundeson qe password nuk eshte visible as ne databaze (HASHING)

    if($statement->execute()){
      return true;
    }
    return false;

    echo "<script> alert('User has been inserted successfully!'); </script>";
    }
    public function LogIn($username, $password){
      $query="SELECT id , first_name , last_name , username , email , password FROM {$this->table_name} WHERE username = :username";

      $statement=$this->conn->prepare($query);
      $statement->bindParam(':username', $username);
      $statement->execute();

      if($statement->rowCount() > 0){
        $row=$statement->fetch(PDO::FETCH_ASSOC);
        if(password_verify($password,$row['password'])){
          //Fillon nje session
          session_start();
          $_SESSION['user_id']=$row['id'];
          $_SESSION['username']=$row['username'];
          return true;
        }
      }
      return false;
    } 
}

?>