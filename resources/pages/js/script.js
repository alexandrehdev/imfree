const $ = e => document.querySelector(e)

$('.header-user').addEventListener('click', () => {
    $('.header-menu').classList.toggle('show-menu')
})

$(".form-register").addEventListener("submit", (e) => {
  e.preventDefault()
  checkInputsRegister()
})

$(".form-login").addEventListener("submit", (e) => {
  e.preventDefault()
  checkInputsLogin()
})

function checkInputsRegister() {
    const username = $('#register-username')
    const email = $('#register-email')
    const password = $('#register-password')
    const passwordConfirmation = $('#passwordConfirmation')

    const usernameValue = username.value
    const emailValue = email.value
    const passwordValue = password.value
    const passwordConfirmationValue = passwordConfirmation.value

    if (usernameValue === ""){
        setError(username, "O nome de usuário é obrigatorio.")
    }else{setSuccess(username)
    }

    if (emailValue === ""){
        setError(email, "O Email é obrigatorio.")
    }else if(!checkEmail(emailValue)) {
        setError(email, "Insira um Email Valido.")
    }else{
        setSuccess(email)
    }

    if (passwordValue === ""){
        setError(password, "A Senha é obrigatorio.")
    }else if(passwordValue.length < 7) {
        setError(password, "A Senha precisa ter no mínimo 7 caracteres.")
    }else{
        setSuccess(password)
    }

    if (passwordConfirmationValue === ""){
        setError(passwordConfirmation, "A Confirmação de Senha é obrigatorio.")
    }else if(passwordConfirmationValue !== passwordValue) {
        setError(passwordConfirmation, "As Senhas não conferem.")
    }else{
        setSuccess(passwordConfirmation)
    }

    const formControl = $(".form").querySelectorAll('.form-control')
    const formIsValue = [...formControl].every((formControl) => {
        return (formControl.className === "form-control success")
    })
    if(formIsValue){
        $('form').submit()
    }
}

function checkInputsLogin() {
    const email = $('#login-email')
    const password = $('#login-password')

    const emailValue = email.value
    const passwordValue = password.value

    if (emailValue === ""){
        setError(email, "Digite seu Email.")
    }else if(!checkEmail(emailValue)) {
        setError(email, "Insira um Email Valido.")
    }else{
        setSuccess(email)
    }

    if (passwordValue === ""){
        setError(password, "Digite sua Senha.")
    }else{
        setSuccess(password)
    }
}

function setError(input, msg){
    const formControl = input.parentElement
    const small = formControl.querySelector('small')
    small.innerText = msg
    formControl.className = 'form-control error'
}

function setSuccess(input){
    const formControl = input.parentElement
    formControl.className = 'form-control success'
}

function checkEmail(email) {
  return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(
    email
  )
}

