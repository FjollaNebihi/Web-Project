<?php
      
      
      
include_once 'UserRepo.php';
include_once 'Database.php';

session_start();

if(!isset($_SESSION['user_id'])){
  header("Location:login.php");
  exit;
}
if($_SESSION['role'] === 'User'){
  die('you dont have access to this page.');
}










?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard | Admin</title>
  <link rel="stylesheet" href="style/dashboardP.css">
  <style>
  
  body{
  background-color: #FFDDE2;
  margin:0;
  padding:0;
  box-sizing: border-box;
}

.Dashboard-users{
  align-items: center;
  justify-content: center;
  display: flex;
  height:40px;
  background-color: #FFDDE2;
  margin-top:30px;
  padding-top:0px;
  flex-direction: column;

  
}
.Dashboard-products{
  align-items: center;
  justify-content: center;
  display: flex;
  height:40px;
  background-color: #FFDDE2;
  margin-top:30px;
  padding-top:0px;
  flex-direction: column;
  margin-right:40px;

  
}
.bliss{
  padding-top:100px;
  margin-bottom:0px;
  padding-bottom:-30px;
  font-size:35px;
  font-family:fantasy;
  letter-spacing:5px;
 
  color:pink;
  text-shadow:1px 1px 4px black;

}

.p{
  font-size:22px;
  color:white;
  text-shadow: 2px 2px 2px rgb(230, 36, 120);


}
th{
  width:100px;
  height:30px;
}
table{
  border-color:rgb(0, 0, 0);
  height:60px;
  width:650px;

}

.edit , .delete{
  border-color:2px solid red;
  width:90px;
  text-decoration: none;
  text-shadow:4px 4px 4px hotpink;
}
a{
  text-decoration: none;
  font-style: normal;
  padding-bottom:30px;
  font-size:16px;
  color:rgb(0, 0, 9);

}
.admin{
  height:40px;width:330px;color:#FFDDE2;background-color: white;
  margin-left:600px;
  border-color:4px solid white;
  color:hotpink;
  font-size: 16px;
  margin-top: 30px;
  margin-bottom:-30px;
  box-shadow: 2px 2px 10px white;

}
.add{
  height:40px;width:195px;color:#FFDDE2;background-color: white;
  margin-left:660px;
  border-color:4px solid white;
  color:hotpink;
  font-size: 16px;
  margin-top: 30px;
  margin-bottom:-30px;
  box-shadow: 2px 2px 10px white;
  border-radius:5px;
  text-decoration:none;

}
.DASH{
  display:flex;direction:space-around; 
  margin-right:40px;
  margin-left:30px;
  gap:120px;
}

    </style>
</head>
<body>
  
  <button class="admin" >You have admin privileges!</button>
  <a href="index.php"><button class="add">Go back to home page!</button></a>

  <div class="DASH">
<div class="Dashboard-products">

  <p class="bliss">BLISS</p>

  <p class="p">PRODUCTS</p>
  <table border="1">
   
    <tr>
      <th>Image</th>
      <th style="width:150px;">Product name</th>
      <th>Brand</th>
      <th>Price</th>
      <th style="width:180px;">Price on sale</th>
      <th>Stock</th>
      <th class="edit"> <a href="edit.html">Edit Product</a></th>
      <th class="delete">Delete Product</th> 
      <th class="edit"><a href="AddProduct.html">Add Product</a></th>
  </tr>


    
</table>
  </div>
  <div class="Dashboard-users">
 
     
  <p class="bliss">BLISS</p>
  <p class="p">USERS</p>
  <table border="1">
   
    <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last name</th>
        <th>Username</th>
        <th>Email</th>
        <th>Role</th>
       
        <th class="edit"> <a href="Edit.php">Edit</a></th>
        <th class="delete">Delete</th> 
        <th>Password</th>
       

        <?php
        include_once 'UserRepo.php';
        $UserReposition =new UserRepo();
        $users= $UserReposition->getAllUsers();

        foreach($users as $user){
          echo
          "
           <tr>
                <td>$user[id]</td> <!-- ID e përdoruesit -->
                <td>$user[first_name]</td> <!-- Emri i përdoruesit -->
                <td>$user[last_name]</td> <!-- Mbiemri i përdoruesit -->
                 <td>$user[username]</td> <!-- Emri i përdoruesit për hyrje -->
                <td>$user[email]</td> <!-- Email-i i përdoruesit -->
                <td>$user[role]</td>
                
               
                
                <td><a href='Edit.php?id=$user[id]'>Edit</a></td> <!-- Link për redaktim me ID -->
                <td><a href='DeleteUser.php?id=$user[id]'>Delete</a></td> <!-- Link për fshirje me ID -->
                <td>$user[password]</td> <!-- Email-i i përdoruesit -->
            </tr>
            
          ";
        }
        ?>
  
    

    </table>









</div>
  
</body>
</html>

