# SimpleSHM
[![Build Status](https://secure.travis-ci.org/klaussilveira/SimpleSHM.png)](http://travis-ci.org/klaussilveira/SimpleSHM)

SimpleSHM is a simple and small abstraction layer for shared memory manipulation using PHP. It makes use of the SHMOP functions, built into most PHP packages.

## Authors and contributors
* [Klaus Silveira](http://www.klaussilveira.com) (Creator, developer, support)

## License
[New BSD license](http://www.opensource.org/licenses/bsd-license.php)

## Todo
* add support for arrays, by automatically serializing or converting to JSON
* add support for objects, by using JSON
* create a better documentation
* error handling can, and should, be improved
* test, test, test

## About Shared Memory
Shared Memory is an efficient mean of exchanging data between applications in the same machine. One application will create a memory portion which other processes can access, as long as they have the proper permissions. You can read more about it here: http://stereochro.me/assets/uploads/notes/dcom3/shmem.pdf

## Using SimpleSHM
The idea behind SimpleSHM is to keep things very easy to use. If you want better control and flexibility, you can always modify the class or extend it.

```php
<?php

use Simple\SHM\Block;

/**
 * Creating new block, with a random ID
 */
$memory = new Block;
$memory->write('Sample');
echo $memory->read();

/**
 * Creating new block, with an specified ID
 */
$new = new Block(897);
$new->write('Sample');
echo $new->read();

/**
 * Reading an existing block, with the ID of 42
 */
$existing = new Block(42);
echo $existing->read();

```
