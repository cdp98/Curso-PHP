function fazerAção(nome, idade) {
    var area = document.getElementById("area");
    var texto = prompt('Qual é o seu sobrenome?');

    area.innerHTML = nome+" "+texto+" "+idade;
}