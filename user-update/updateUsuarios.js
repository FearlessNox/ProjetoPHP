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

document.querySelectorAll(".form-button-submit").forEach(input => {  
        let form = input.parentNode.parentNode
        let formId = form.id.match(/[0-9]{1,}$/)[0]

    input.addEventListener('click', ev => {
        ev.preventDefault()
        
        user.email = document.getElementById(`form-email-${formId}`)
        user.password = document.getElementById(`form-password-${formId}`)
    
        Object.entries(user).forEach(([key, value]) => {
            document.getElementById(`form-${key}-desc-${formId}`).classList.remove("user-error")
            document.getElementById(`form-${key}-desc-${formId}`).classList.remove("user-sucess")
            document.getElementById(`form-${key}-desc-${formId}`).innerText = ""
        })
    
        let {email, password} = user
    
        try{
            verificarEmail(email.value),
            document.getElementById(`form-email-desc-${formId}`).classList.add('user-sucess')
            document.getElementById(`form-email-desc-${formId}`).innerText = "Email de acordo com a política"
            verificarSenha(password.value)
            document.getElementById(`form-password-desc-${formId}`).classList.add('user-sucess')
            document.getElementById(`form-password-desc-${formId}`).innerText = "Senha de acordo com a política"
            console.log(form.children[0].submit())
        } catch(error){
            const errorId = (error.input).toLowerCase()
            console.log(errorId)
            document.getElementById(`form-${errorId}-desc-${formId}`).classList.add('user-error')
            document.getElementById(`form-${errorId}-desc-${formId}`).innerText = error.message
        }
    })
})

