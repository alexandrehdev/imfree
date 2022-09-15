let keys = ["username","email","password","confirmPassword"];

let registerBtn = document.getElementById("register");

let form = document.forms["formRegister"];

registerBtn.onclick = function(e){
     // validar campo vazio 
     // validar se campo senha e confirmar senha são iguais
    keys.forEach(function(key){
        if(form[key].value.length === 0){
            e.preventDefault();
            console.log(key + " está vazio");
        }
    });
}




