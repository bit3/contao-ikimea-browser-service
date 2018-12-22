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
 * @author     David Molineus <david.molineus@netzmacht.de>
 * @copyright  2013-2018 Contao Community Alliance.
 * @license    https://github.com/contao-community-alliance/ikimea-browser-service/blob/master/LICENSE LGPL-3.0
 * @filesource
 */

namespace Bit3\Contao\IkimeaBrowserService\Test;

use PHPUnit\Framework\TestCase;

/**
 * Test if the service is registered properly.
 */
class ServiceTest extends TestCase
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
