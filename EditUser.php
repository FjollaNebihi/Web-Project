<?php 
include_once 'Database.php';
include_once 'Product.php';

$conn = new mysqli("localhost", "root", "", "bliss");



$usr_id = $_GET['id'];



$sql = "SELECT * FROM user WHERE id = $usr_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    $row = $result->fetch_assoc();
} else {
    echo "No record found";
}
?>


<div id="forma">
<h1>Edit User</h1>
<form method="post">
   
    <input type="text" name="first_name" value="<?php echo $row['first_name']; ?>" ><br><br>
    <input type="text" name="last_name" value="<?php echo $row['last_name']; ?>" ><br><br>
    <input type="text" name="username" value="<?php echo $row['username']; ?>" ><br><br>
    <input type="text" name="email" value="<?php echo $row['email']; ?>" ><br><br>
    <input type="text" name="role" value="<?php echo $row['role']; ?>" ><br><br>
    <input type="submit" value="Update" id="btn">
</form>
</div>
<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $role = $_POST['role'];
    
    

    $sql_up = "UPDATE user 
          SET 
              first_name = '$first_name', 
              last_name = '$last_name', 
              username = '$username', 
              email = '$email',
              role = '$role' 
          WHERE id = '$usr_id'";

    if ($conn->query($sql_up) === TRUE) {
        
        
        echo "Record updated successfully";
        header ("Location: AdminDashboard.php");

    } else {
        echo "Error updating record: " . $conn->error;
    }
}

?>

<style>

    body{
        background-color: #FFDDE2;
  margin:0;
  padding:0;
  box-sizing: border-box;


}
h1{
    color:#fff;
}
#forma{
    padding: 20px;
    background-color:CF7793;
    border-radius:20px;
    position: absolute;
    margin-left:37%;
    margin-top:11%;
}
#btn{
    transition:0.8s;
    background-color:F1A5AD;
    border:0;
    border-radius:10px;
    padding:15px;
}
input{
    border:0;
    padding: 5px;
    border-radius:10px;
}
#btn:hover{
    transition:0.8s;
    background-color:lightpink;
    }
</style>