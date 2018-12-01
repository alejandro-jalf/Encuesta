<?php 
    include ("escribe.php");

    $pre1 = "";
    $pre2 = "";
    $pre3 = "";
    $pre4 = "";
    $pre5 = "";
    $pre6 = "";
    $pre7 = "";
    $texto3 = "";
    $texto4 = "";
    $texto5 = "";
    $texto7 = "";

    $pre1 = $_POST["pre1"];
    $pre2 = $_POST["pre2"];
    $pre3 = $_POST["pre3"];
    $pre4 = $_POST["pre4"];
    $pre5 = $_POST["pre5"];
    $pre6 = $_POST["pre6"];
    $pre7 = $_POST["pre7"];
    if (isset($_POST["texto3"])) {
        $texto3 = $_POST["texto3"];
        $pre3 = $pre3.",".$texto3;
    }
    if (isset($_POST["texto4"])) {
        $texto4 = $_POST["texto4"];
        $pre4 = $pre4.",".$texto4;
    }
    if (isset($_POST["texto5"])) {
        $texto5 = $_POST["texto5"];
        $pre5 = $pre5.",".$texto5;
    }
    if (isset($_POST["texto7"])) {
        $texto7 = $_POST["texto7"];
        $pre7 = $pre7.",".$texto7;
    }
    escribe($pre1,$pre2,$pre3,$pre4,$pre5,$pre6,$pre7);
?>

<!DOCTYPE html>
<head>
<html lang="es">
    <link rel="shortcut icon" href="../images/icon_encuest.png">
    <link rel="stylesheet" type="text/css" media="screen" href="../styles/style.css" />
    <title>Termino Correcto</title>
</head>
<body>
    <article id="superi" lang="es">
        <h1>INSTITUTO TECNOLOGICO SUPERIOR DE ACAYUCAN</h1>
        <h2>ISC	TALLER DE INVESTIGACION</h2>
        <h3>Uso de tecnologias para la transferencia de archivos electronicos y multimedia entre computadoras y celulares dentro del ITSA</h3>
    </article>
    <article id="centro">
        <div id="body">
            <div class="frase" >
                !Felicitaciones!
            </div>
            <div class="frase">
                Has terminado exitosamente la encuesta
            </div>
            <div>
                <form class="btn" action="../index.php">
                    <input class="btn" type="submit" value="Regresar">
                </form>
            </div>
        </div>
    </article>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
</body>
</html>