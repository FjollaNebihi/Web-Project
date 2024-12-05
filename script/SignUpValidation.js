function validateForm(){
  let name = document.getElementById("name").value;
  let lastname=document.getElementById("lastname").value;
  let username = document.getElementById("username").value;
  let email=document.getElementById("email").value;
  let password=document.getElementById("password").value;

  let password_length=password.length;

  if(name.length=0 ){
    alert("Please enter the requested information!");
    return false;
  }
  if(lastname="" ){
    alert("Please enter the requested information!");
    return false;
  }
  if(emailname="" ){
    alert("Please enter the requested information!");
    return false;
  }
  if(username="" ){
    alert("Please enter the requested information!");
    return false;
  }
  if(name="" ){
    alert("Please enter the requested information!");
    return false;
  }
else if(password_length<8){
    alert("Password should have at least 8 characters!");
  }
  
  else{
    alert("Your account has been successfully created!");
    return true;
  }


}