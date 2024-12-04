 function validateForm(){
 let username = document.getElementById("username").value;
 let password = document.getElementById("password").value;
 let pass_len = password.length;
 if (username === ""){
    alert("Username must be filled out!");
    return false;
 } if  (pass_len< 8) {
    alert("Password should have at least 8 characters!")
 } else {
    alert("Logged in successfully!")
    return true;
 } 
}