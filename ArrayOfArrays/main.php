<?php

$associativeArray = fromPairs([['cat', 5], ['dog', 6], ['cat', 11]]);

print_r($associativeArray);

function fromPairs($array) : array
{
    $result = array();
    foreach ($array as [$key, $value]) {
        $result[$key] =  $value;
    }

    return $result;
}
