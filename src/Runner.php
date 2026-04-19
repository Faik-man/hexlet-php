<?php

namespace Hexlet\Php\Runner;

function run()
{
    return collect(['taylor', 'abigail', 'ivan'])->map(function ($name) {
        return strtoupper($name);
    });
}
