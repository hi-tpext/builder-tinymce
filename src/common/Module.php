<?php

namespace tpext\builder\tinymce\common;

use tpext\common\Module as baseModule;

class Module extends baseModule
{
    protected $version = '1.0.1';

    protected $name = 'builder.tinymce';

    protected $title = 'tinymce资源包';

    protected $description = '提供[tinymce]相关样式资源';

    protected $root = __DIR__ . '/../../';

    protected $assets = 'assets';
}
