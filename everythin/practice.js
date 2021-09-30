function validate(){
    const username = document.getElementById("user");
    const password = document.getElementById("password");

    if(username.value == "" || password.value == ""){
        alert("please fill up the blank")
        // alert("input must not be blank")
        return false;
    }
    else if(username.value.trim() === "" || password.value.trim() == "")
    {
        alert("You must not use space on username & password")
        return false;
    }
else{
    true;
}
}