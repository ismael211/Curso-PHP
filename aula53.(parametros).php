<?php

function somar (float $val1, float $val2 = 0): string {

    return $val1 + $val2;
}

$result = somar(10, 20);

echo somar($result);