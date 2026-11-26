<?php
$file =fopen("dati.csv", "r");
echo"<table border='1'>";

while (!feof($file)) {
    $riga =fgets($file);
    $dati= explode(",", $riga);

    echo "<tr>";
    for ($i=0, $i<count($dati);$i++){
        echo "<td>" . $dati[i]. "<td>";
    }
    echo "</tr>"
}

echo "</table>";
fclose($file);