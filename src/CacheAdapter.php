<?php

namespace GraphStory\Cache;

interface CacheAdapter
{
    /**
     * Gets a cache entry
     * returning null if not in cache.
     *
     * @return null|mixed
     */
    public function get($key);

    /**
     * Sets a cache entry.
     *
     * @param mixed $key
     * @param mixed $value
     * @param int   $ttl   OPTIONAL Time to live
     */
    public function set($key, $value, $ttl = null);

    /**
     * Deletes a cache entry.
     *
     * @param mixed $key
     */
    public function delete($key);
}
