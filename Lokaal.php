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

foreach ($lokalen as $lokaal) {
    echo "<ul>";


    echo $lokaal["lokaalnaam"] . "  ". $lokaal["capaciteit"]  . "mensen";
}
echo "</ul>";

?>
