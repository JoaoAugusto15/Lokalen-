<?php


$lokalen = [
    "lokaal1" => [
        "lokaalnaam" => "1.073",
        "capaciteit" => 28
    ],
    "lokaal2" => [
        "lokaalnaam" => "1.28",
        "capaciteit" => 30
    ],
    "lokaal3" => [
        "lokaalnaam" => "1.078",
        "capaciteit" => 32
    ],
     "lokaal4" => [
    "lokaalnaam" => "1.064",
    "capaciteit" => 28
    ]

];
echo "<ul>";


foreach ($lokalen as $key => $lokaal) {

    echo "<li>";
 
    echo sprintf("%s - Capaciteit: %d mensen", $lokaal["lokaalnaam"], $lokaal["capaciteit"]);

    echo "</li>";
}

echo "</ul>";
?>
