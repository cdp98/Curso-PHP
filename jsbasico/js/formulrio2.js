function validar() {

    var valor = document.getElementById("numero").value;

    if (valor.length > 2) {
        alert("Você digitou um número que tem mais de dois algarismos.")
        return false;
    }else{
        return true;
    }
}