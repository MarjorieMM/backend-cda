<?php

$tva = 20;

function fullPrice($vat, $price)
{
    return $price * $vat / 100 + $price;
}