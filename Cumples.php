<?php
$cumpleaños = $_GET["opcion"];
$instrucciones = 'MODO DE USO: !cumpleaños (opción). Usa "!canal lista" para ver la lista de opciones disponibles.';
if (isset($cumpleaños) && $cumpleaños != "") {
    $prefijo = "El cumple de ";
    $canales = array(
        "vhykka" => $prefijo . "Vhykka es el 8 de Junio 🐆",
        "raxi" => $prefijo . "Raxi es el 9 de marzo 🐻",
        "justix" => $prefijo . "Jus es el 27 de diciembre 🐼",
        "jan" => $prefijo . "Jan es el 30 de noviembre 🧁",
        "ingeniera" => $prefijo . "La igneniera es el 7 de diciembre 🍉",
        "pabli" => $prefijo . "Pabli es el 31 de marzo 🦁",
        "sofi" => $prefijo . "Sofi es el 17 de noviembre 🐬",
        "baby" => $prefijo . "Baby es el 18 de diciembre ⭐",
        "justina" => $prefijo . "Justina es el 6 de abril 💙"
    );
    if (array_key_exists($cumpleaños, $cumples)) {
        echo $cumples[$cumpleaños];
    } else if ($cumpleaños == "lista") {
        foreach ($cumples as $un_cumpleaños => $valor) {
            echo $un_cumpleaños . " | ";
        }
    } else {
        echo $instrucciones;
    }
} else {
    echo $instrucciones;
}
?>