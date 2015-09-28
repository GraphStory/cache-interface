<?php

namespace GraphStory\Cache;

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
        $this->cache->get($key);
    }

    /**
     * {@inheritDoc}
     */
    public function set($key, $value, $ttl)
    {
        $this->cache->set($key, $value, $ttl);
    }

    /**
     * {@inheritDoc}
     */
    public function delete($key)
    {
        throw new \BadMethodCallException(
            'Method not implemented by Desarrolla2 Cache library.'
        );
    }
}
