const LoginForm = document.getElementById("LoginForm");
const RegisterForm = document.getElementById("RegisterForm");
const Indicator = document.getElementById("Indicator");

function login(){
    RegisterForm.style.transform = "translateX(0px)";
    LoginForm.style.transform = "translateX(0px)";
    Indicator.style.transform = "translateX(0px)";
}

function register(){
    RegisterForm.style.transform = "translateX(350px)";
    LoginForm.style.transform = "translateX(350px)";
    Indicator.style.transform = "translateX(100px)";
}