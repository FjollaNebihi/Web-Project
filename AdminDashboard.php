<?php
include 'Database.php'

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
.bliss{
  padding-top:100px;
  margin-bottom:0px;
  padding-bottom:-30px;
  font-size:35px;
  font-family:fantasy;
  letter-spacing:5px;
 
  color:rgb(255, 255, 255);
  text-shadow:1px 1px 4px 

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
  width:60px;
  text-decoration: none;
}
a{
  text-decoration: none;
  font-style: normal;
  padding-bottom:30px;
  font-size:16px;
  color:rgb(0, 0, 9);

}
.admin{
  height:40px;width:350px;color:#FFDDE2;background-color: white;
  margin-left:600px;
  border-color:4px solid white;
  color:hotpink;
  font-size: 16px;
  margin-top: 30px;
  margin-bottom:-30px;
  box-shadow: 2px 2px 10px white;

}
   
    </style>
</head>
<body>
  <button class="admin" >You have admin privileges!</button>
<div class="Dashboard-users">

  <p class="bliss">BLISS</p>

  <p class="p">PRODUCT DASHBOARD</p>
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
  </tr>


    
    </table>
  </div>
  
</body>
</html>

