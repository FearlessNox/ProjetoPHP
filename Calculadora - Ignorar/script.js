let main = document.querySelector("main")
const root = document.querySelector(":root")
let mathOperation = document.getElementById('mathOperation')
let copyToBoard = document.getElementById('copyToClipboard')
let mathResult = document.getElementById('result')
let keysBtn = document.querySelectorAll('.charKey')
let allowedKeys = ["(", ")", "/", "*", "-", "+", "9", "8", "7", "6", "5", "4", "3", "2", "1", "0", ".", "%", " "]

mathOperation.addEventListener('keypress', function(ev) {
    ev.preventDefault();
    let key = ev.key;   
    if(allowedKeys.includes(key)){
        mathOperation.value += key
    } else if(key == "BackSpace"){
        let remove = mathOperation.value.slice(0, mathOperation.value.length -1)
        mathOperation.value = remove
    } else if(key == "Enter"){
        calcular()
    }
})

keysBtn.forEach(function(charKeyBtn){
    charKeyBtn.addEventListener('click', function(ev){
        ev.preventDefault()
        mathOperation.value += ev.target.dataset.value
    })  
})

document.getElementById("equal").addEventListener("click", calcular)
document.getElementById("clear").addEventListener("click", function(){
    mathOperation.value = ""
    mathOperation.focus()
})

function calcular() {
    mathResult.value = "Error"
    let resultado = mathResult.value = eval(mathOperation.value)
    mathResult.value = resultado
}

copyToBoard.addEventListener('click', function(ev){
    let clipboard = document.getElementById('result')
    navigator.clipboard.writeText(clipboard.value)

    copyToBoard.style.transition = "ease-in-out 3s"
    copyToBoard.style.backgroundColor = "#47ff6c"
    copyToBoard.innerText = "Copied"
    copyToBoard.style.color = 'black'
})


document.getElementById("themeSwitcher").addEventListener("click", function () {
    if (main.dataset.theme === "dark") {
        root.style.setProperty("--color-black", "#ffffff")
        root.style.setProperty("--color-cyan", "#000")
        root.style.setProperty("--color-blue", "#262626")
        root.style.setProperty("--color-white", "#ff0000")
        main.dataset.theme = "light"
    } else {
        root.style.setProperty("--color-black", "#000")
        root.style.setProperty("--color-cyan", "#00ffff")
        root.style.setProperty("--color-blue", "#1e90ff")
        root.style.setProperty("--color-white", "#fff")
        main.dataset.theme = "dark"
    }
  })