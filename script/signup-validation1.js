function SignUp(){
    let email = document.getElementById("input").value;
    error1.innerHTML="";

    if (email=="" ){
        error1.innerHTML="A valid email address is requested!";
        return false;
    }
}