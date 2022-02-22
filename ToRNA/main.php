<?php

$Rna = toRna('ACGTGGTCTTAA');

print($Rna);

function toRna($Dnk) : string
{
    $Rna = "";

    $transcriptionSample = [
        "G" => "C",
        "C" => "G",
        "T" => "A",
        "A" => "U"
    ];

    for($i = 0; $i < strlen($Dnk); $i++)
    {
        $Rna .= $transcriptionSample[$Dnk[$i]];
    }

    return $Rna;
}