function enviar() {
    let newMens = document.getElementById("inputEnviar").value;
    let mens1 = document.getElementById("cMens1").value;
    let papelera = document.getElementById("cMens2").value;
    document.getElementById("cMens1").innerHTML = newMens;
    document.getElementById("cMens2").innerHTML = mens1;
}