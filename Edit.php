
<!DOCTYPE html>
<html lang="en">
<head>
  <script src="script/SignUpValidation.js"></script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit | Bliss</title>

  <link rel="stylesheet" href="style/edit.css">
  
</head>
<body>
  <div class="logo">
    <p class="bliss">BLISS</p>
  </div>
  
  <div class="sign-up-container">
    <div class="sign-up">
      <h2>Edit your credentials</h2>

      <form action="#" method="POST" name="SignUp" onsubmit="return validateForm()"> 
      <input type="text" class="name" name="first_name" id="name" placeholder="First Name">
      <div id="error1"></div>
      <input type="text" class="last-name" name="last_name" id="lastname" placeholder="Last Name">
      <div id="error2"></div>
     
        <input type="text" class="username" name="username" id="username" placeholder="Create a username">
        <div id="error3"></div>
        <input type="text" class="email" name="email" id="email" placeholder="Email address">
        <div id="error4"></div>
        <input type="password" class="password" name="password" id="password" placeholder="Create a password">
        <div id="error5"></div>
        <button class="submit" onclick="validateForm()">Edit</button>
  
      

    </form>
    

    </div>
 
 
  
</body>
</html>