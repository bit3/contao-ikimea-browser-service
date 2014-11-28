<?php

/**
 * This file is part of bit3/contao-ikimea-browser-service.
 *
 * (c) Tristan Lins <tristan.lins@bit3.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * This project is provided in good faith and hope to be usable by anyone.
 *
 * @package    bit3/contao-ikimea-browser-service
 * @author     Tristan Lins <tristan.lins@bit3.de>
 * @copyright  bit3 UG <https://bit3.de>
 * @link       https://github.com/bit3/contao-ikimea-browser-service
 * @license    https://github.com/bit3/contao-ikimea-browser-service/blob/master/LICENSE MIT
 * @filesource
 */

/** @var \Pimple $container */

$container['ikimea-browser'] = $container->share(
    function () {
        return new Ikimea\Browser\Browser();
    }
);
