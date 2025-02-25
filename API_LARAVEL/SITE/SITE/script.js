// function fetchProducts() {

//     var operador = $op;

//     var numum = prompt("Primeiro numero");
//     var numdois = prompt("Segundo numero");

//     if (operador == "1") {
//         operador = "somar"
//     } else if (operador == "2") {
//         operador = "subtrair"
//     } else if (operador == "3") {
//         operador = "multiplicar"
//     }

//     //JSON dados de envio
//     var envioDados = {
//         "numum": numum,
//         "numdois": numdois
//     };

//     //Requisição 
//     var requestOptions = {
//         method: 'post',
//         headers: {
//             'Content-Type': 'application/json',
//         },
//         body: JSON.stringify(envioDados)
//     };

//     fetch(`http://127.0.0.1:8000/api/calcular/${operador}`, requestOptions)
//         .then(response => {
//             if (!response.ok) {
//                 throw new Error('Erro ao enviar dados');
//             }
//             return response.json();

//         })
//         .then(data => {
//             console.log('Resposta da API', data);
//         })
//         .catch(error => {
//             console.log('Erro ao enviar', error);
//         });

// }

function enviar() {
    let op = document.getElementById("op").value;
    let num1 = document.getElementById("num1").value;
    let num2 = document.getElementById("num2").value;

    //Soma
    if (op == 1) {
        soma(num1, num2);
    }else if(op == 2 ){
        subtracao(num1, num2);
    }else if(op == 3 ){
        multiplicacao(num1, num2);
    }else if(op == 4 ){
        divisao(num1, num2);
    }
}

function soma(num1, num2) {
    let endpoint = 'calcular/somar';

    let dados = {
        "numum": num1,
        "numdois": num2
    };

    clientHttp(endpoint, dados);
}

function subtracao(num1, num2) {
    let endpoint = 'calcular/subtrair';

    let dados = {
        "numum": num1,
        "numdois": num2
    };

    clientHttp(endpoint, dados);
}

function divisao(num1, num2) {
    let endpoint = 'calcular/dividir';

    let dados = {
        "numum": num1,
        "numdois": num2
    };

    clientHttp(endpoint, dados);
}

function multiplicacao(num1, num2) {
    let endpoint = 'calcular/multiplicar';

    let dados = {
        "numum": num1,
        "numdois": num2
    };

    clientHttp(endpoint, dados);
}

function clientHttp(endpoint, dados) {
    let url = 'http://127.0.0.1:8000/api/';

    let options = {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(dados)
    };

    fetch(url + endpoint, options)
        .then(response => {
            if (!response.ok) {
                throw new Error('Erro ao enviar dados');
            }
            return response.json();

        })
        .then(data => {
            resposta(data.Resultado);
        })
        .catch(error => {
            resposta(error)
        });
}

function resposta(r) {
    let resp = document.getElementById("resp");
    resp.innerText = 'A resposta é: ' + r;
}