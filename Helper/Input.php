<?php

function Input(string $info) : string {
    echo "$info : ";
    $data = fgets(STDIN);
    return trim($data);
}