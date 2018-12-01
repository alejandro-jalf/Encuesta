
var donde = "0";
var donde0 = "0";
var donde00 = "0";
var donde1 = "0";
var donde2 = "0";
var donde3 = "0";
var donde4 = "0";
var donde5 = "0";
var donde6 = "0";
var donde7 = "0";

var respuesta1 = "";
var respuesta2 = "";
var respuesta3 = "";
var respuesta4 = "";
var respuesta5 = "";
var respuesta6 = "";
var respuesta7 = "";

var vectorRespuesta = [];
function selecciona(id) {
    var respu = document.getElementById(id);

    donde00 = id.substring(id.length-2,id.length);
    donde0 = id.substring(id.length-2,id.length-1);

    if (donde0=="0"){
        donde1 = id.substring(id.length-2,id.length);
    }
    if (donde0=="1"){
        donde2 = id.substring(id.length-2,id.length);
    }
    if (donde0=="2"){
        donde3 = id.substring(id.length-2,id.length);
        if (("op"+donde3)=="op24"){
            enabledText("3",false);
        } else {
            enabledText("3",true);
        }
    }
    if (donde0=="3"){
        donde4 = id.substring(id.length-2,id.length);
        if (("op"+donde4)=="op34"){
            enabledText("4",false);
        } else {
            enabledText("4",true);
        }
    }
    if (donde0=="4"){
        donde5 = id.substring(id.length-2,id.length);
        if (("op"+donde5)=="op42"){
            enabledText("5",false);
        } else {
            enabledText("5",true);
        }
    }
    if (donde0=="5"){
        donde6 = id.substring(id.length-2,id.length);
    }
    if (donde0=="6"){
        donde7 = id.substring(id.length-2,id.length);
        if (("op"+donde7)=="op61"){
            enabledText("7",false);
        } else {
            enabledText("7",true);
        }
    }
    desmarca(donde0);
    respu.style.background = "#b9e7e9";
    marcaRadio(donde00);
}

function desmarca(dd2){
    if (dd2=="0" || dd2=="1" || dd2=="2" || dd2=="3"){
        document.getElementById("op"+dd2+"1").style.background = "#e6e6e6";
        document.getElementById("op"+dd2+"2").style.background = "#e6e6e6";
        document.getElementById("op"+dd2+"3").style.background = "#e6e6e6";
        document.getElementById("op"+dd2+"4").style.background = "#e6e6e6";
    }else{
        document.getElementById("op"+dd2+"1").style.background = "#e6e6e6";
        document.getElementById("op"+dd2+"2").style.background = "#e6e6e6";
    }
    if (donde1!="0"){
        document.getElementById("op".concat(donde1)).style.background = "#b9e7e9";
    }
    if (donde2!="0"){
        document.getElementById("op".concat(donde2)).style.background = "#b9e7e9";
    }
    if (donde3!="0"){
        document.getElementById("op".concat(donde3)).style.background = "#b9e7e9";
    }
    if (donde4!="0"){
        document.getElementById("op".concat(donde4)).style.background = "#b9e7e9";
    }
    if (donde5!="0"){
        document.getElementById("op".concat(donde5)).style.background = "#b9e7e9";
    }
    if (donde6!="0"){
        document.getElementById("op".concat(donde6)).style.background = "#b9e7e9";
    }
    if (donde7!="0"){
        document.getElementById("op".concat(donde7)).style.background = "#b9e7e9";
    }
}

function hoverTo(id,dd22){
    desmarca(dd22);
    var respu = document.getElementById(id);
    respu.style.background = "#b9e7e9";
}

function marcaRadio(id){
    $("#imput".concat(id)).prop("checked", true);
}

function desabledText(){
    $("#text3").prop("disabled",true);
    $("#text4").prop("disabled",true);
    $("#text5").prop("disabled",true);
    $("#text7").prop("disabled",true);
}
desabledText();

function enabledText(id,state){
    $("#text"+id).prop("disabled",state);
    $("#text"+id).focus();
}

function insertaDatos(){
    var respuesta = findFillAll();
    if(respuesta!=true){
        alert(respuesta);
        return false;
    }else{
        var vec = getRespuesta();
        document.getElementById("datos").innerHTML = vec[0]+"%"+vec[1]+"%"+vec[2]+"%"+vec[3]+"%"+vec[4]+"%"+vec[5]+"%"+vec[6]+"%";
        return true;
    }
}

function getRespuesta(){
    vectorRespuesta[0] = donde1.substring(donde1.length-1, donde1.length);
    vectorRespuesta[1] = donde2.substring(donde2.length-1, donde2.length);
    vectorRespuesta[2] = donde3.substring(donde3.length-1, donde3.length);
    vectorRespuesta[3] = donde4.substring(donde4.length-1, donde4.length);
    vectorRespuesta[4] = donde5.substring(donde5.length-1, donde5.length);
    vectorRespuesta[5] = donde6.substring(donde6.length-1, donde6.length);
    vectorRespuesta[6] = donde7.substring(donde7.length-1, donde7.length);

    if(vectorRespuesta[2]=="4"){
        vectorRespuesta[2] = "4," + $("#text3").val().trim();
    }
    if(vectorRespuesta[3]=="4"){
        vectorRespuesta[3] = "4," + $("#text4").val().trim();
    }
    if(vectorRespuesta[4]=="2"){
        vectorRespuesta[4] = "2," + $("#text5").val().trim();
    }
    if(vectorRespuesta[6]=="1"){
        vectorRespuesta[6] = "1," + $("#text7").val().trim();
    }
    return vectorRespuesta;
}

function findFillAll(){
    if (donde1!="0" && donde2!="0" && donde3!="0" && donde4!="0" && donde5!="0" && donde6!="0" && donde7!="0" ){
        if (donde3 =="24" && ($("#text3").val().trim()=="")){
            return "Falto llenar el campo de texto de la pregunta 3"
        }
        if (donde4 =="34" && ($("#text4").val().trim()=="")){
            return "Falto llenar el campo de texto de la pregunta 4"
        }
        if (donde5 =="42" && ($("#text5").val().trim()=="")){
            return "Falto llenar el campo de texto de la pregunta 5"
        }
        if (donde7 =="61" && ($("#text7").val().trim()=="")){
            return "Falto llenar el campo de texto de la pregunta 7"
        }
        return true;
    } else {
        return ("Verifique todos las preguntas, alguna no esta constestada");
    }
}
