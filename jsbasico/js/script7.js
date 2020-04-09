function addBola() {
    var bola = document.createElement("div");
    bola.setAttribute("class", "bola");
    //criando div colocando a atributobuto class="bola".

    var p1 = Math.floor(Math.random() * 1000);
    var p2 = Math.floor(Math.random() * 500);
    var color = Math.floor(Math.random() * 999999);
    bola.setAttribute("style", "left:"+p1+"px;top:"+p2+"px;background-color:#"+color+";");
    bola.setAttribute("onclick", "estourar(this)");

    document.body.appendChild(bola);
}
function estourar(element) {
    document.body.removeChild(element);
}
function iniciar() {
    setInterval(addBola, 1000);
}