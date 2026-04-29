<?php
/*
 * This file is part of Webisters Routing Library.
 *
 * (c) Hafiz Muhammad Moaz <thewebisters@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Tests\Routing\Debug;

use Framework\Routing\Debug\RoutingCollection;
use PHPUnit\Framework\TestCase;

final class RoutingCollectionTest extends TestCase
{
    protected RoutingCollection $collection;

    protected function setUp() : void
    {
        $this->collection = new RoutingCollection('Routing');
    }

    public function testIcon() : void
    {
        self::assertStringStartsWith('<svg ', $this->collection->getIcon());
    }
}
