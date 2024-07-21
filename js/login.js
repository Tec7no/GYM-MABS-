function togglePassword(fieldId, icon) {
    var passwordField = document.getElementById(fieldId);
    if (passwordField.type === "password") {
        passwordField.type = "text";
        icon.innerHTML = '<i class="fa-solid fa-eye"></i>';
    } else {
        passwordField.type = "password";
        icon.innerHTML = '<i class="fa-solid fa-eye-slash"></i>';
    }
}

type="text/javascript">
        window.addEventListener("scroll",function(){
        var header = document.querySelector("header");
        header.classList.toggle("sticky", window.scrollY >0);
        })

function loginwelcome(){
    var user = document.getElementById("email").value;
    let x = "Hi " + user + ", Welcome To MABS ♥" ;
    alert(x);
}