 function validateForm(){
 let username = document.getElementById("username").value;
 let password = document.getElementById("password").value;
 let error=document.getElementById("error");

 let error1 = document.getElementById("error1");
let error2 = document.getElementById("error2");
 
 error1.innerHTML="";
 error2.innerHTML="";
 
 if (username == ""){
   error1.innerHTML="Username must be filled out!";
   username.focus();
    return false;
 } 
 if (password.length<8) {
    error2.innerHTML="Password should have at least 8 characters!";
    password.focus();
 } 
 else {
    alert("Logged in successfully!")
    return true;
 } 
 alert("Trouble logging in?")
 return false;
}