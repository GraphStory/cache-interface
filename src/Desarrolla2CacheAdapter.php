<?php

namespace GraphStory\Cache;

use Desarrolla2\Cache\Cache;

/**
 * Desarrolla2 Cache Adapter.
 *
 * @link https://github.com/desarrolla2/Cache
 */
class Desarrolla2CacheAdapter implements CacheAdapter
{
    private $cache;

    public function __construct(Cache $cache)
    {
        $this->cache = $cache;
    }

    /**
     * {@inheritDoc}
     */
    public function get($key)
    {
        return $this->cache->get($key);
    }

    /**
     * {@inheritDoc}
     */
    public function set($key, $value, $ttl = null)
    {
        $this->cache->set($key, $value, $ttl);
    }

    /**
     * {@inheritDoc}
     */
    public function delete($key)
    {
        $this->cache->delete($key);
    }
}
