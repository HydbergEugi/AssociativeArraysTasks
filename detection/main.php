<?php

$array = findWhere(
    [
        ['title' => 'Book of Fooos', 'author' => 'FooBar', 'year' => 1111],
        ['title' => 'Cymbeline', 'author' => 'Shakespeare', 'year' => 1611],
        ['title' => 'The Tempest', 'author' => 'Shakespeare', 'year' => 1611],
        ['title' => 'Book of Foos Barrrs', 'author' => 'FooBar', 'year' => 2222],
        ['title' => 'Still foooing', 'author' => 'FooBar', 'year' => 3333],
        ['title' => 'Happy Foo', 'author' => 'FooBar', 'year' => 4444],
    ],
    ['author' => 'Shakespeare', 'year' => 1611]
);

print_r($array);

function findWhere ($array, $pairs)
{
    foreach ($array as $record)
    {
        $detectedRecord = true;
        foreach ($pairs as $key => $value) {
            if (array_key_exists($key, $record))
            {
                if($record[$key] != $value)
                {
                    $detectedRecord = false;
                    break;
                }
            }
            else
            {
                $detectedRecord = false;
                break;
            }
        }
        if ($detectedRecord)
        {
            return $record;
        }
    }

    return null;
}