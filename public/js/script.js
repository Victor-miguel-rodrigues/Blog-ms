const tituloDiario = document.querySelector('#title-24h')
const paragrafo = document.querySelector("#paragrafo");
const titulo = document.querySelector('#titulo');
const local = document.querySelector("#localization");
const data = document.querySelector("#data");

tituloDiario.textContent = "A fuga das galinhas hoje"


async function buscarDados(){
    try{
        const response = await fetch('/crud-simples/api/posters');
   
        if(!response.ok){
           throw new Error(`Erro: ${response.status}`);
        }
   
        const dados = await response.json();

       titulo.textContent = dados.titulo;
       paragrafo.textContent = dados.paragrafo;
       local.textContent = 'corumba';
       data.textContent = "2002.08.31";


    }catch(error){
        console.error('Erro ao consumir a API:', error);
    }
}

buscarDados();