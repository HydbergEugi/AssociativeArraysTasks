<?php

echo toRoman(40000);
echo "   ";
echo toArabic("IIII");

function toRoman(int $num)
{
    if ($num < 1 || $num > 3000) return null;

    $romanResult = "";
    $transcriptionSample = [
        1000 => 'M',
        900 => 'CM',
        500 => 'D',
        400 => 'CD',
        100 => 'C',
        90 => 'XC',
        50 => 'L',
        40 => 'XL',
        10 => 'X',
        9 => 'IX',
        5 => 'V',
        4 => 'IV',
        1 => 'I',
    ];
    $numParts = array();

    foreach ($transcriptionSample as $arabic => $roman)
    {
         $fullPart = (int)($num / $arabic);
         $num = $num % $arabic;
         for($i = 0; $i < $fullPart; $i++)
         {
             $numParts[] = $arabic;
         }
    }

    foreach ($numParts as $numPart)
    {
        $romanResult .= $transcriptionSample[$numPart];
    }

    return $romanResult;
}

function toArabic(string $romanNum) : int
{

    $transcriptionSample = [
        'M' => 1000,
        'CM' => 900,
        'D' => 500,
        'CD' => 400,
        'C' => 100,
        'XC' => 90,
        'L' => 50,
        'XL' => 40,
        'X' => 10,
        'IX' => 9,
        'V' => 5,
        'IV' => 4,
        'I' => 1,
    ];
    $numResult = 0;
    $previousArabic = 0;
    foreach ($transcriptionSample as $roman => $arabic)
    {
        if ($previousArabic < $arabic) return false;

        $romanPart = substr($romanNum, 0, strlen($roman));
        $i = 1;
        while ($roman == $romanPart)
        {
            if ($i > 3) return false;

            $numResult += $arabic;
            $romanNum = substr($romanNum, strlen($roman));
            $romanPart = substr($romanNum, 0, strlen($roman));
            $i++;

        }

        $previousArabic = $arabic;
    }

    return $numResult;
}