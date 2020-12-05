<?php

$children = [
    "children" => [
        [
            "val" => 5
        ],
        [
            "val" => 8
        ],
        [
            "val" => 7
        ]
    ]
];
$target_val = 7;
foreach ($children['children'] as &$child) {
    if (isset($child['children'])) {
        //Do something
    }
}
var_dump($children);
foreach ($children['children'] as $child) {
    echo "\nValue: {$child['val']}\n";
}
var_dump($children);
