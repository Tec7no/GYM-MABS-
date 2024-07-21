function validatePasswords() {
    var pass1 = document.getElementById('passwordField1').value;
    var pass2 = document.getElementById('passwordField2').value;
    if (pass1 === pass2) {
        return true;
    } else {
        alert("Something is wrong with your password, check it again.");
        return false;
    }
}

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