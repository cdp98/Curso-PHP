function verificar() {
    var n1 = document.getElementById('n1').innerHTML;
    var n2 = document.getElementById('n2').value;

    if (n1 == n2) {
        alert("VOCÊ ACERTOU O NÚMERO.");
    }else {
        alert("VOCÊ ERROU O NÚMERO, SEU BURRO!");
    }

    resetar();
}
function resetar() {
    document.getElementById("n2").value;

    var res = Math.floor(Math.random() * 100);
    document.getElementById("n1").innerHTML = res;
}