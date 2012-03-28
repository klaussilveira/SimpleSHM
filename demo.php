<?php

require('SimpleSHM.php');

/**
 * Creating new block, with a random ID
 */
$memory = new SimpleSHM;
$memory->write('Sample');
echo $memory->read();

/**
 * Creating new block, with an specified ID
 */
$new = new SimpleSHM(897);
$new->write('Sample');
echo $new->read();

/**
 * Reading an existing block, with the ID of 42
 */
$existing = new SimpleSHM(42);
echo $existing->read();
