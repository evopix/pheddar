<?php

/*
 * This file is part of Pheddar.
 *
 * (c) Brandon Summers <brandon@brandonsummers.name>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

if (!$loader = @include __DIR__.'/../vendor/.composer/autoload.php') {
    die('You must set up the project dependencies, run the following commands:'.PHP_EOL.
        'curl -s http://getcomposer.org/installer | php'.PHP_EOL.
        'php composer.phar install'.PHP_EOL);
}

$loader->add('Pheddar\Test', __DIR__);