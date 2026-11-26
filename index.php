<!DOCTYPE html>
<html>
<head>
    <title>Tabella Pokemon</title>
</head>
<body>

<h1>Elenco Pokemon</h1>

<?php

$file = fopen("pokemon.csv", "r");

if (!$file) {
    die("Errore nell'apertura del file");
}

// Lettura delle intestazioni
$intestazioni = fgetcsv($file);

echo "<table border='1'>";

// Creazione della prima riga
echo "<tr>";

foreach ($intestazioni as $colonna) {
    echo "<th>" . htmlspecialchars($colonna) . "</th>";
}

echo "</tr>";

// Lettura dei dati
while (($riga = fgetcsv($file)) !== false) {

    echo "<tr>";

    foreach ($riga as $dato) {
        echo "<td>" . htmlspecialchars($dato) . "</td>";
    }

    echo "</tr>";
}

echo "</table>";

// Chiusura del file
fclose($file);

?>

</body>
</html>
