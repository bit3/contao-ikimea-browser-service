<?php

/**
 * This file is part of contao-community-alliance/uikimea-browser-service.
 *
 * (c) 2013-2018 Contao Community Alliance.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * This project is provided in good faith and hope to be usable by anyone.
 *
 * @package    contao-community-alliance/ikimea-browser-service
 * @author     Tristan Lins <tristan.lins@bit3.de>
 * @author     Sven Baumann <baumann.sv@gmail.com>
 * @copyright  2013-2018 Contao Community Alliance.
 * @license    https://github.com/contao-community-alliance/ikimea-browser-service/blob/master/LICENSE LGPL-3.0
 * @filesource
 */

/** @var \Pimple $container */

$container['ikimea-browser'] = $container->share(
    function () {
        return new Ikimea\Browser\Browser();
    }
);
