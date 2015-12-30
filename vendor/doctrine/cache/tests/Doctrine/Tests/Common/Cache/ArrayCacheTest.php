<?php

namespace Doctrine\Tests\Common\Cache;

use Doctrine\Common\Cache\ArrayCache;

class ArrayCacheTest extends CacheTest
{
    public function testGetStats()
    {
        $cache = $this->_getCacheDriver();
        $stats = $cache->getStats();

        $this->assertNull($stats);
    }

    protected function _getCacheDriver()
    {
        return new ArrayCache();
    }

    public function testLifetime()
    {
        $this->markTestSkipped('ArrayCache does not implement TTL currently.');
    }

    protected function isSharedStorage()
    {
        return false;
    }
}