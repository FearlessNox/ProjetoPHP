function verificarEmail(userEmail){
    if(
        !userEmail.match(/@/) ||
        !userEmail.match(/[a-zA-Z1-9_]{2,}(?=@)/) ||
        !userEmail.match(/(?<=@)[a-zA-Z1-9_]{2,}/) ||
        !userEmail.match(/(?<=@..+\.)[a-zA-Z1-9_]{2,}/)
    ){
        let erro = new Error("Email não é válido")
        erro.input = "Email"
        throw erro
    }
}

function gerarErroSenha(politica){
    let erro = new Error(politica)
    erro.input = "Password"
    return erro
}

function verificarSenha(userPassword){
    if(!userPassword.match(/[a-z]{1,}/)){
        throw gerarErroSenha("A senha deve ter caracter minúsculo")
    }
    if(!userPassword.match(/[A-Z]{1,}/)){
        throw gerarErroSenha("A senha deve ter caracter Maiúsculo")
    }
    if(!userPassword.match(/[1-9]{1,}/)){
        throw gerarErroSenha("A senha deve ter numerico")
    }
    if(!userPassword.match(/.{6,}/)){
        throw gerarErroSenha("A senha deve ter no minimo 6 letras")
    }

}

let user = {}

document.getElementById("container-login-form").addEventListener('submit', ev => {
    ev.preventDefault()
    console.clear()
    user.email = document.getElementById('user-email')
    user.password = document.getElementById('user-password')

    Object.entries(user).forEach(([key, value]) => {
        document.getElementById(`user-${key}-desc`).classList.remove("user-error")
        document.getElementById(`user-${key}-desc`).classList.remove("user-sucess")
        document.getElementById(`user-${key}-desc`).innerText = ""
    })

    let {email, password} = user

    try{
        verificarEmail(email.value),
        document.getElementById(`${email.id}-desc`).classList.add('user-sucess')
        document.getElementById(`${email.id}-desc`).innerText = "Email de acordo com a política"
        verificarSenha(password.value)
        document.getElementById(`${password.id}-desc`).classList.add('user-sucess')
        document.getElementById(`${password.id}-desc`).innerText = "Senha de acordo com a política"
        ev.currentTarget.submit()
    } catch(error){
        console.log(error)
        const errorId = (`user-${(error.input).toLowerCase()}`)
        document.getElementById(`${errorId}-desc`).classList.add('user-error')
        document.getElementById(`${errorId}-desc`).innerText = `${error.message}`
    }
})