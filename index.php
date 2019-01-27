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
}
fclose($outfile);

echo $lijst[0]['naam'] . "; " . $lijst[0]['score'] . "<br>";
echo $lijst[1]['naam'] . "; " . $lijst[1]['score'] . "<br>";
echo $lijst[2]['naam'] . "; " . $lijst[2]['score'] . "<br>";