<?php

/*
 * This file is part of the Eophantasy package.
 *
 * (c) Ilya Sitnikov <sitnikovik@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Eophantasy\Http\Test\Request\Url;

use Eophantasy\Http\Request\Url\Host\Host;
use Eophantasy\Http\Request\Url\Protocol\Https;
use Eophantasy\Http\Request\Url\UrlWrap;
use PHPUnit\Framework\TestCase;

/**
 * Tests the URL without a path.
 * 
 * @covers \Eophantasy\Http\Request\Url\UrlWrap
 */
final class UrlWithoutPathTest extends TestCase
{
    /**
     * Tests the string representation of the URL.
     * 
     * @return void
     * @covers \Eophantasy\Http\Request\Url\UrlWrap::__toString
     * @covers \Eophantasy\Http\Request\Url\Protocol\Https::__toString
     * @covers \Eophantasy\Http\Request\Url\Host\Host::__toString
     */
    public function testToString(): void
    {   
        $url = new UrlWrap(
            new Https(),
            new Host('example.com'),
        );

        $this->assertEquals(
            'https://example.com',
            $url->__toString()
        );
    }
}