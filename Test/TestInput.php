<?php

require_once __DIR__ . "/../Helper/Input.php";

$nama = Input("nama");
echo "Nama : $nama" . PHP_EOL;

$status = Input("status");
echo "Status : $status" . PHP_EOL;