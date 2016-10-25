<?php
require_once 'index2.php';
$b = new Base();
$d = new Derivative();

$b->base_funct();
$d->funct();
$d->base_funct();
?>