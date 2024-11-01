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

function verificarSenha(userPassword){
    if(
        !userPassword.match(/[a-z]{1,}/) ||
        !userPassword.match(/[A-Z]{1,}/) ||
        !userPassword.match(/[1-9]{1,}/) ||
        !userPassword.match(/.{8,}/)
    ){
        let erro = new Error("Senha não atende os requisitos")
        erro.input = "Password"
        throw erro
    } else {
        
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
        document.getElementById(`${errorId}-desc`).innerText = `${error.input} não de acordo com a política`
    }
})