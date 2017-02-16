<?php

$array = [
    'name' => [
        'Your name is required',
        'Your name cannot contain any numbers'
    ],
    'dob' => [
        'Your date of birth is required'
    ],
    'password' => [
        'Your password must be 6 characters or more',
        'Your password isn\'t strong enough'
    ],
    'Something else'
];

function flatten_array (array $items, array $flattened = []) {
    foreach ($items as $item) {
        if(is_array($item)) {
            $flattened = flatten_array($item, $flattened);
            contin
        }
        
        $flattened [] = $item;
    }
    
    return $flattened;
}

var_dump(flatten_array($array));