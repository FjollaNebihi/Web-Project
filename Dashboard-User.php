<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

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
 
  color:pink;
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
   
    </style>
    </head>
    <body>

    
   

<div class="Dashboard-users">
  <p class="bliss">BLISS</p>
  <p class="p">DASHBOARD</p>
  <table border="1">
   
    <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last name</th>
        <th>Username</th>
        <th>Email</th>
        <th>Password</th>
        <th class="edit"> <a href="Edit.php">Edit</a></th>
        <th class="delete">Delete</th> 
    </tr>
    

    </table>
</body>
</html>
