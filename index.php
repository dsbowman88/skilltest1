<?php
$invoer = file("input.txt");
$outfile = fopen("output.txt", "w");
foreach ($invoer as $inv){
    $aregel = explode(";", $inv);
    $naam = $aregel[0];
    $score = (int)$aregel[1];
    $lijst[] = ['naam' => $naam, 'score' => $score];
}
sort($lijst);
foreach ($lijst as $regel){
    fwrite($outfile, $regel['naam'] . "; " . $regel['score'] . "\n");
    echo $regel['naam'] . "; " . $regel['score'] . "<br>";
}
fclose($outfile);
