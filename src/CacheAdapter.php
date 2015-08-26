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
     */
    public function set($key, $value);

    /**
     * Deletes a cache entry.
     *
     * @param mixed $key
     */
    public function delete($key);
}
