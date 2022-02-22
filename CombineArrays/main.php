<?php

$array = combine([
    [ 'a' => 1, 'b' => 2, 'c' => 3 ],
    [],
    [ 'a' => 3, 'b' => 2, 'd' => 5],
    [ 'a' => 6 ],
    [ 'b' => 4, 'c' => 3, 'd' => 2 ],
    [ 'e' => 9 ]
]);


print_r($array);

function combine($array) : array
{
    $result = array();

    for($i = 0; $i < count($array); $i++)
    {
        $result = array_merge($result, $array[$i]);
    }

    foreach ($result as $key => $value)
    {
        $result[$key] = [];

        foreach ($array as $item)
        {
            if(key_exists($key, $item))
            {
                $result[$key][] = $item[$key];
            }
        }
        $result[$key] = array_unique( $result[$key]);
    }

    return $result;
}