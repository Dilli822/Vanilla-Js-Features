const form = document.getElementById('form');
const username = document.getElementById('username');
const email = document.getElementById('email');
const password = document.getElementById('password');
const repeatpassword = document.getElementById('repeatpassword');


form.addEventListener('submit', (e)=>{
    e.preventDefault();

    //calling th checkinput function
    checkInputs();
});

function checkInputs(){
    //get the values from the inputs
    const usernameValue = username.value.trim();
    const emailValue = email.value.trim();
    const passwordValue = password.value.trim();
    const repeatpasswordValue = repeatpassword.value.trim();

    if(usernameValue === ''){
        //show error
        //add error class
        setErrorFor(username, 'Username cannot be blank');
    }

    else{
        //add success valid input class
        setSuccessFor(username);
    }

    if(emailValue === ''){
        setErrorFor(email, "Email cannot be blank!")
    }
    else if(!isEmail(emailValue)) {
        setErrorFor(email, 'please enter valid email!')
    }
    
    else{
        setSuccessFor(email)
    }


    if(passwordValue === ""){
        setErrorFor(password,"Password must be filled up!")
    }

    else{
        setSuccessFor(password)
    }


    if(repeatpasswordValue === ""){
        setErrorFor(repeatPassword, "Password must be repeated!")
    }
    else if (repeatpasswordValue !== passwordValue){
        setErrorFor(repeatpassword, "Password doesnot match")
    }

    //show success messages
    else{
        setSuccessFor(repeatpassword)
    }

   }

function setErrorFor(input, message){
    const formControl = input.parentElement; // .form-control
    const small = formControl.querySelector('small') //for error small msgs

    //add error msgs
    small.innerText = message;

    // add error class
    formControl.className = 'form-control error';


}

//making success functions
function setSuccessFor(input){
    const formControl = input.parentElement;
    formControl.className = 'form-control success';
}

//checking each one sequencely

function isEmail(email){
    //adding regex for email
    return /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/.test(email);
}