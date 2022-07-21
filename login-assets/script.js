document.getElementById('login-form').addEventListener('submit', function(event){
    event.preventDefault();
})

const loginForm = document.getElementById("login-form");
const loginButton = document.getElementById("login-form-submit");
const loginErrorMsg = document.getElementById("login-error-msg");

loginButton.addEventListener("click", (e) => {
    e.preventDefault();
    const username = loginForm.username.value;
    const password = loginForm.password.value;

    if (username === "Noela" && password === "password") {
        alert("You have successfully logged in.");
        window.location.replace("./login.html");
    }else {
        loginErrorMsg.style.opacity = 1;
    }
    if (username === "Praise" && password === "praise") {
        alert("You have successfully logged in.");
        window.location.replace("./login.html");
    }else {
        loginErrorMsg.style.opacity = 1;
    }
    if (username === "Dan" && password === "Pato") {
        alert("You have successfully logged in.");
        window.location.replace("./login.html");
    }else {
        loginErrorMsg.style.opacity = 1;
    }

})
