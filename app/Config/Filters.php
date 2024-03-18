<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Filters extends BaseConfig
{
    // ... ini

    public $methods = [
        'post' => ['csrf'],
    ];

    // ...
}
