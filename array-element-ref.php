<?php

$children = [
    "children" => [
        [
            "val" => 5
        ],
        [
            "val" => 8
        ]
    ]
];
foreach ($children['children'] as &$child) {
    if (isset($child['children'])) {
        //Do something
    }
}
var_dump($children['children'][1]['val'] === 8);  //True
foreach ($children['children'] as $child) {
}

var_dump($children['children'][1]['val'] === 8);  //True
