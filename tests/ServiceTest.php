<?php

/**
 * Contao Composer Installer
 *
 * Copyright (C) 2013 Contao Community Alliance
 *
 * @package contao-composer
 * @author  Dominik Zogg <dominik.zogg@gmail.com>
 * @author  Christian Schiffler <c.schiffler@cyberspectrum.de>
 * @author  Tristan Lins <tristan.lins@bit3.de>
 * @link    http://c-c-a.org
 * @license LGPL-3.0+
 */

namespace Bit3\Contao\IkimeaBrowserService\Test;

/**
 * Test if the service is registered properly.
 */
class ServiceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test registration of the service.
     *
     * @return void
     */
    public function testService()
    {
        $container = new \Pimple();
        require __DIR__ . '/../contao/config/services.php';

        $this->assertTrue(
            isset($container['ikimea-browser']),
            'The service "ikimea-browser" is not set properly.'
        );
        $this->assertInstanceOf(
            'Ikimea\\Browser\\Browser',
            $container['ikimea-browser'],
            'The service "ikimea-browser" is not an instance of "Ikimea\\Browser\\Browser".'
        );
        $this->assertEquals(
            spl_object_hash($container['ikimea-browser']),
            spl_object_hash($container['ikimea-browser']),
            'The service "ikimea-browser" is not shared.'
        );
    }
}
