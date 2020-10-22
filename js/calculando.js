function inserir(numero){
    document.tela1.tela2.value = document.tela1.tela2.value + numero;
}

function resultados(){
    result=document.tela1.tela2.value;
    if(result){
        document.tela1.tela2.value = eval(result);
    }
}
function limpar(){
    document.tela1.tela2.value = "";
}