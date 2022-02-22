<?php

if (scrabble("sokfrkk;c", "cross"))
{
    echo "true";
}
else
{
    echo "false";
}



function scrabble ($str, $word) : bool
{
    $array_str = array();
    $result = true;

    for($i = 0; $i < strlen($str); $i++)
    {
        $array_str[$str[$i]] = ($array_str[$str[$i]] ?? 0) + 1;
    }

    $word_array = array();
    for($i = 0; $i < strlen($word); $i++)
    {
        $word_array[$word[$i]] = ($word_array[$word[$i]] ?? 0) + 1;
    }

    foreach ($word_array as $char => $count)
    {
        if ($array_str[$char] < $count)
            $result = false;
    }
    return $result;
}