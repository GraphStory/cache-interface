<?php

require_once './vendor/autoload.php';

$finder = Symfony\CS\Finder\DefaultFinder::create()
    ->in('src/')
    ->in('tests/');

return \Symfony\CS\Config\Config::create()
    ->setUsingCache(true)
    ->fixers([
        '-single_blank_line_before_namespace',
        '-pre_increment',
        '-concat_without_spaces',
        'concat_with_spaces',
        'ordered_use',
    ])
    ->finder($finder);
