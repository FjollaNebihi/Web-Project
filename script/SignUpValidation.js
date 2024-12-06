function validateForm(){
  let name = document.getElementById("name").value;
  let lastname=document.getElementById("lastname").value;
  let username = document.getElementById("username").value;
  let email=document.getElementById("email").value;
  let password=document.getElementById("password").value;
  let error=document.getElementById("error");

  let password_length=password.length;
  error1.innerHTML="";
  error2.innerHTML="";
  error3.innerHTML="";
  error4.innerHTML="";
  error5.innerHTML="";
  
  if(name.length==0 ){
    error1.innerHTML="Please enter your first name!";
    return false;
  }
  else if(lastname=="" ){
    error2.innerHTML="Please enter your last name!";
    return false;
  }
  else if(username=="" ){
    error3.innerHTML="Please create a username!";
    return false;
  }
  else if(email==="" ){
    error4.innerHTML="A valid email address is requested!";
    return false;
  }
 
if(password_length<8){
  error5.innerHTML="Password should have at least 8 characters";
  return false;
  }
  
  else{
    alert("Your account has been successfully created!");
    return true;
  }
}