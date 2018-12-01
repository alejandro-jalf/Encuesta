
<?php 

    function escribe($res1,$res2,$res3,$res4,$res5,$res6,$res7){
        $file = fopen("datos.txt", "a");
        fwrite($file, "Datos: ".$res1." / ".$res2." / ".$res3." / ".$res4." / ".$res5." / ".$res6." / ".$res7 . PHP_EOL);
        fwrite($file,"" . PHP_EOL);
        fclose($file);
    }

?>
