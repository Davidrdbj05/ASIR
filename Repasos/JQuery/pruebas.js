/* Conjunto de ejercicios de JQuery */

$(document).ready(function () {
    $("")

    $("#btnEsconder").click(function (){
        $("p").hide();
    });
    $("#btnMostrar").click(function (){
        $("p").show();
    });
    $("#btnRojo").click(function (){
        $("p").addClass("rojo")
    });
    $("#btnUnderline").click(function (){
        $("p").addClass("underline")
    });
    $("#btnLimpiar").click(function (){
        $("p").removeClass("rojo");
        $("p").removeClass("underline");
    });
    $("#btnBorrar").click(function (){
        let prMens = prompt('Escribe aquí').toLocaleLowerCase();
        if (prMens == "todo"){
            $("#div1").fadeOut(750);
            $("#div2").fadeOut(750);
            $("#ansiedad").fadeIn(2000).addClass("ansiedad");
            $("#btnAnsiedad").fadeIn(2000).addClass("btnAnsiedad");
        }
        else {
            $("#"+prMens).fadeOut(750)
        }
    })
    $("#btnAnsiedad").click(function (){
            $("#ansiedad").fadeOut(750);
            $("#btnAnsiedad").fadeOut(750);
            $("#divNo").fadeIn(2000).addClass("divNo");
            $("#no").fadeIn(2000).addClass("no");
    })
});