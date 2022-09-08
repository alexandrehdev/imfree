let keys = ["username","email","password","confirmPassword"];

let registerBtn = document.getElementById("register");

let form = document.forms["formRegister"];

registerBtn.onclick = function(e){
    e.preventDefault();

    keys.forEach(function(key){
        if(form[key].value.length === 0){
            console.log(key + " está vazio");
        }
    });
}




