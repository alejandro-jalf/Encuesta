<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Encuesta</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="./images/icon_encuest.png">
    <link rel="stylesheet" type="text/css" media="screen" href="./styles/main.css" />
</head>
<body>
    <article id="superi">
        <h1>INSTITUTO TECNOLÓGICO SUPERIOR DE ACAYUCAN</h1>
        <h2>ISC	TALLER DE INVESTIGACIÓN</h2>
        <h3>Uso de tecnologías para la transferencia de archivos electrónicos y multimedia entre computadoras y celulares dentro del ITSA</h3>
    </article>
    <article id="cuerpo">
    <form action="./data/ejecuta.php" method="post" onsubmit="return insertaDatos()">

        <div class="preguntas">
            <div class="enunciado">1.- ¿Tienes teléfono celular y/o computadora portátil?</div>
            <div class="opciones">
                <div class="contendor-opci" onclick="selecciona('op01')" id="op01" onmouseover="hoverTo('op01','0')" onmouseout="desmarca('0')">
                    <input class="inci1" type="radio" name="pre1" id="imput01" value="1"><div class="frase">Solo celular</div>
                </div>
                <div class="contendor-opci" onclick="selecciona('op02')" id="op02" onmouseover="hoverTo('op02','0')" onmouseout="desmarca('0')">
                    <input class="inci1" type="radio" name="pre1" id="imput02" value="2"><div class="frase">Solo computadora portátil</div>
                </div>
                <div class="contendor-opci" onclick="selecciona('op03')" id="op03" onmouseover="hoverTo('op03','0')" onmouseout="desmarca('0')">
                    <input class="inci1" type="radio" name="pre1" id="imput03" value="3"><div class="frase">Ambos</div>
                </div>
                <div class="contendor-opci" onclick="selecciona('op04')" id="op04" onmouseover="hoverTo('op04','0')" onmouseout="desmarca('0')">
                    <input class="inci1" type="radio" name="pre1" id="imput04" value="4"><div class="frase">Ninguno</div>
                </div>
            </div>
        </div>
        <div class="preguntas">
            <div class="enunciado">2.- Normalmente dentro del ITSA, ¿Utilizas estos equipos (celular y laptop)?</div>
            <div class="opciones">
                <div class="contendor-opci" onclick="selecciona('op11')" id="op11" onmouseover="hoverTo('op11','1')" onmouseout="desmarca('1')">
                    <input class="inci1" type="radio" name="pre2" id="imput11" value="1"><div class="frase">Solo celular</div>
                </div>
                <div class="contendor-opci" onclick="selecciona('op12')" id="op12" onmouseover="hoverTo('op12','1')" onmouseout="desmarca('1')">
                    <input class="inci1" type="radio" name="pre2" id="imput12" value="2"><div class="frase">Solo computadora portátil</div>
                </div>
                <div class="contendor-opci" onclick="selecciona('op13')" id="op13" onmouseover="hoverTo('op13','1')" onmouseout="desmarca('1')">
                    <input class="inci1" type="radio" name="pre2" id="imput13" value="3"><div class="frase">Ambos</div> 
                </div>
                <div class="contendor-opci" onclick="selecciona('op14')" id="op14" onmouseover="hoverTo('op14','1')" onmouseout="desmarca('1')">
                    <input class="inci1" type="radio" name="pre2" id="imput14" value="4"><div class="frase">Ninguno</div>
                </div>
            </div>
        </div>
        <div class="preguntas">
            <div class="enunciado">3.- Dentro del ITSA, ¿Qué tecnología o medio de transmisión utilizas para enviar archivos multimedia (Fotos, videos, audio, etc.) a amigos o profesores?</div>
            <div class="opciones">
                <div class="contendor-opci" onclick="selecciona('op21')" id="op21" onmouseover="hoverTo('op21','2')" onmouseout="desmarca('2')">
                    <input class="inci2" type="radio" name="pre3" id="imput21" value="1"><div class="frase">Bluetooth</div>
                </div>
                <div class="contendor-opci" onclick="selecciona('op22')" id="op22" onmouseover="hoverTo('op22','2')" onmouseout="desmarca('2')">
                    <input class="inci2" type="radio" name="pre3" id="imput22" value="2"><div class="frase">WhatsApp</div>
                </div>
                <div class="contendor-opci" onclick="selecciona('op23')" id="op23" onmouseover="hoverTo('op23','2')" onmouseout="desmarca('2')">
                    <input class="inci2" type="radio" name="pre3" id="imput23" value="3"><div class="frase">USB</div>
                </div>
                <div class="contendor-opci" onclick="selecciona('op24')" id="op24" onmouseover="hoverTo('op24','2')" onmouseout="desmarca('2')">
                    <input class="inci2" type="radio" name="pre3" id="imput24" value="4"><div class="frase">Otro</div>
                    <input class="texto" type="text" name="texto3" id="text3">
                </div>
            </div>
        </div>
        <div class="preguntas">
            <div class="enunciado">4.- Fuera del ITSA, ¿Qué tecnología o medio de transmisión utilizas para enviar archivos multimedia (Fotos, videos, audio, etc.) a amigos o profesores?</div>
            <div class="opciones">
                <div class="contendor-opci" onclick="selecciona('op31')" id="op31" onmouseover="hoverTo('op31','3')" onmouseout="desmarca('3')">
                    <input class="inci2" type="radio" name="pre4" id="imput31" value="1"><div class="frase">Bluetooth</div> 
                </div>
                <div class="contendor-opci" onclick="selecciona('op32')" id="op32" onmouseover="hoverTo('op32','3')" onmouseout="desmarca('3')">
                    <input class="inci2" type="radio" name="pre4" id="imput32" value="2"><div class="frase">WhatsApp</div>
                </div>
                <div class="contendor-opci" onclick="selecciona('op33')" id="op33" onmouseover="hoverTo('op33','3')" onmouseout="desmarca('3')">
                    <input class="inci2" type="radio" name="pre4" id="imput33" value="3"><div class="frase">USB</div>
                </div>
                <div class="contendor-opci" onclick="selecciona('op34')" id="op34" onmouseover="hoverTo('op34','3')" onmouseout="desmarca('3')">
                    <input class="inci2" type="radio" name="pre4" id="imput34" value="4"><div class="frase">Otro</div>
                    <input class="texto" type="text" name="texto4" id="text4">
                </div>                
            </div>
        </div>
        <div class="preguntas">
            <div class="enunciado">5.- Dentro del ITSA, ¿Te sirven las aplicaciones que envían archivos multimedia por medio de internet o datos móviles?</div>
            <div class="opciones">
                <div class="contendor-opci" onclick="selecciona('op41')" id="op41" onmouseover="hoverTo('op41','4')" onmouseout="desmarca('4')">
                    <input class="inci3" type="radio" name="pre5" id="imput41" value="1"><div class="frase">SI</div>
                </div>
                <div class="contendor-opci" onclick="selecciona('op42')" id="op42" onmouseover="hoverTo('op42','4')" onmouseout="desmarca('4')">
                    <input class="inci3" type="radio" name="pre5" id="imput42" value="2"><div class="frase">NO, ¿Por que?</div>
                    <input class="texto" type="text" name="texto5" id="text5" placeholder="Si ingresara mas de una razon, ¡SEPARELO CON COMA , !">
                </div>
            </div>
        </div>
        <div class="preguntas">
            <div class="enunciado">6.- Dentro del ITSA, ¿Se te ha infectado alguna memoria al intentar pasar algún archivo multimedia?</div>
            <div class="opciones">
                <div class="contendor-opci" onclick="selecciona('op51')" id="op51" onmouseover="hoverTo('op51','5')" onmouseout="desmarca('5')">
                    <input class="inci4" type="radio" name="pre6" id="imput51" value="1"><div class="frase">SI</div>
                </div>
                <div class="contendor-opci" onclick="selecciona('op52')" id="op52" onmouseover="hoverTo('op52','5')" onmouseout="desmarca('5')">
                    <input class="inci4" type="radio" name="pre6" id="imput52" value="2"><div class="frase">NO</div>
                </div>
            </div>
        </div>
        <div class="preguntas">
            <div class="enunciado">7.- ¿Has tenido problemas o inconvenientes al enviar archivos electrónicos y/o multimedia dentro del ITSA?</div>
            <div class="opciones">
                <div class="contendor-opci" onclick="selecciona('op61')" id="op61" onmouseover="hoverTo('op61','6')" onmouseout="desmarca('6')">
                    <input class="inci3" type="radio" name="pre7" id="imput61" value="1"><div class="frase">SI, ¿Cual?</div>
                    <input class="texto" type="text" name="texto7" id="text7" placeholder="Si ingresara mas de un inconveniente, ¡SEPARELO CON COMA , !">
                </div>
                <div class="contendor-opci" onclick="selecciona('op62')" id="op62" onmouseover="hoverTo('op62','6')" onmouseout="desmarca('6')">
                    <input class="inci3" type="radio" name="pre7" id="imput62" value="2"><div class="frase">NO</div> 
                </div> 
            </div>
        </div>
        <div class="preguntas" id="prefin">
            <div class="enunciado" id="fin">Final de las preguntas, ahora solo tiene que ¡Enviar la encuesta!</div>
            <input  type="submit" name="enviar" id="boton" value="Enviar" >  
        </div>
        </form>
    </article>
    <div id="datos">Datos</div>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="./scripts/main.js"></script>  
</body>
</html>