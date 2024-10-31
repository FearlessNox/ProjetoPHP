let media = (...numbers) => {
    return numbers.reduce((acumulador, valorAtual) => acumulador + valorAtual, 0)
}

let mediaPonderada = (...numbers) => {
    let mediaResult = 0
    for(let i = 0; i < numbers.length; i+=2){
        mediaResult += (numbers[i] * numbers[i+1])
    }
    return mediaResult
}

let mediana = (...numbers) => {
    let meio = 0
    if((numbers.length)%2==1){
        meio = (numbers.length-1)/2
        return numbers[meio]
    } else {
        meio = (numbers.length-2)/2
        return (numbers[meio] + numbers[meio+1])/2
    }
}

let moda = (...numbers) => {
    let numbersOBJ = {}
    let numbersArray = []
    numbers.forEach((element) => {
        if(numbersOBJ?.[element] === undefined){
            numbersOBJ[element] = 1
            numbersArray.push(element)
        } else {
            numbersOBJ[element] += 1
        }
    })
    
    let result = [numbersArray[0]] 
    for(let i = 1; i < numbersArray.length; i++){
        if(numbersOBJ[result[0]] < numbersOBJ[numbersArray[i]]){
            result = []
            result.push(numbersArray[i])
        }
        else if (numbersOBJ[result[0]] === numbersOBJ[numbersArray[i]]){
            result.push(numbersArray[i])
        }
    }

    (result.length > 1) ? result = "Amodal" : result = result[0]
    return result
}

// let resultado = mediaPonderada(1, 2, 3, 4)
// let resultado = mediana(1, 2, 4, 3, 4)
let resultado = moda(1, 2, 4, 3, 2, 2, 3, 4)

console.log(resultado)