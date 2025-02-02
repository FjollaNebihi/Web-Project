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
h1{
    color:#fff;
    margin-left:-70px;
    text-shadow:10px 10px 10px #FF7084;
}
#forma{
    padding: 10px;
    background-color:CF7793;
    border-radius:20px;
  position:absolute;
    margin-left:37%;
    margin-top:7%;
    margin-bottom:-20px;

}
#btn{
    transition:0.8s;
    background-color:F1A5AD;
    border:0;
    border-radius:10px;
    padding:15px;
}
input{
  margin-top:-10px;
    border:0;
    padding: 5px;
    border-radius:10px;
}
#btn:hover{
    transition:0.8s;
    background-color:lightpink;
    }

    .contactus{
      width:400px; margin-right:30px;margin-left:-100px;
      text-shadow:1px 1px 4px rgb(255,221,226);
      transition: transform 0.2s ease, box-shadow 0.3s ease;
      box-shadow:10px 10px 10px #FF7084;
      height:30px;

    }
    .submit{
      background color: #ff80ff;
      margin-left:40px;
      width:80px;
      box-shadow:10px 10px 10px #FF7084;

    }
    .home{
      margin-top:20px;
      margin-left:30px;
      background color: #ff80ff;
      margin-left:40px;
      width:80px;
      box-shadow:10px 10px 10px #FF7084;

    }
  </style>
</head>
<body>
  <a href="index.php" ><button class="home">Go back</button></a>
  <div id="forma">
    <h1>Fill out this contact form</h1>
    <form method="post">
       
        
        <input type="text" name="Product_Name" placeholder="First and last name"><br><br>
        <input type="text" name="Price" placeholder="Email" ><br><br>
        <input type="text" name="Description" placeholder="Phone number"><br><br>
        <input type="submit" name="contact" class="submit" placeholder="Submit"><br><br><br>
        <input type="text" name="Product_Name" class="contactus" placeholder="Feel free to contact us directly blissCostumerService@outlook.com"><br><br>
    </form>
    </div>
  
</body>
</html>