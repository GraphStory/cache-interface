<?php

namespace GraphStory\Cache;

use phpFastCache;

/**
 * PhpFastCache Adapter.
 *
 * @link https://github.com/khoaofgod/phpfastcache
 */
class PhpFastCacheAdapter implements CacheAdapter
{
    private $phpFastCache = null;

    public function __construct(phpFastCache $phpFastCache)
    {
        $this->phpFastCache = $phpFastCache;
    }

    /**
     * {@inheritDoc}
     */
    public function get($key)
    {
        return $this->phpFastCache->get($key);
    }

    /**
     * {@inheritDoc}
     */
    public function set($key, $value, $ttl = null)
    {
        return $this->phpFastCache->set($key, $value, $ttl);
    }

    /**
     * {@inheritDoc}
     */
    public function delete($key)
    {
        throw new \BadMethodCallException('Method not implemented.');
    }
}
