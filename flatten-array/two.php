<?php

$array = [
    'name' => [
        'Your name is required',
        'Your name cannot contain any numbers',
        'inner' => [
            'Some value'
        ]
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

$flattened = new RecursiveArrayIterator ($array);

$flattened = new RecursiveIteratorIterator ($flattened);

$flattened = iterator_to_array($flattened, false);

var_dump($flattened);