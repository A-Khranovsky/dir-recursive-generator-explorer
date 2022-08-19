<?php

spl_autoload_register();

use App\MyDirExplorer;

/**
 *extension means file's extension with which files will pass the filter.
 * '*' means all files will pass the filter.
 *
 *fileInfo is array, as default equals ['condition' => '>', 'value' => 0],
 *where:
 *  condition is only < or > and means to pass the filter for files with
 *  size smaller or bigger,
 *  value means a value to campare filesize with (in Bytes).
 */

$dir = new MyDirExplorer('*', ['condition' => '<', 'value' => 100]);

foreach ($dir->explore(__DIR__) as $item) {
    echo str_repeat('&nbsp&nbsp&nbsp&nbsp', $item['depth']) . $item['value'] . '<br />';
}
