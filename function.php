<?php

function writeSecretSentence(string $animal, string $element){
    $sentence = $animal . "s'incline face à : " . $element;
    return $sentence;
};

$result = writeSecretSentence("Le dragon ", "l'air");
echo $result;