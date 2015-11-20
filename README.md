# Graph Story Cache Interface

Simple cache adapters and interface based on Anthony Ferrara's blog post [A Followup To An Open Letter To PHP-FIG](http://blog.ircmaxell.com/2014/10/a-followup-to-open-letter-to-php-fig.html).

[![Build Status](https://travis-ci.org/GraphStory/cache-interface.svg?branch=master)](https://travis-ci.org/GraphStory/cache-interface)

## Installation

### Using Composer

Use [Composer](https://getcomposer.org/) to install the cache-interface library:

`$ composer require graphstory/cache-interface`

## Usage

``` php
// Example using Daniel González's Cache library

use Desarrolla2\Cache\Cache;
use Desarrolla2\Cache\Adapter\File;
use GraphStory\Console\Cache\DesarrollaAdapter;

$cacheDir = '/tmp';
$adapter = new File($cacheDir);
$adapter->setOption('ttl', 3600);
$desarrolla2 = new Cache($adapter);
$cache = DesarrollaAdapter($desarrolla2);

$cache->set('key', 'myKeyValue', 3600);

// later ...

echo $cache->get('key');
```

(The above example was mostly cribbed from the [desarrolla2/Cache](https://github.com/desarrolla2/Cache) documentation.)

## BYOA (bring your own adapter)

You can write your own adapter by creating a class that implements the `CacheAdapter` interface. Use the other adapters as a reference and you should be good to go!
