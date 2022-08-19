<?php

spl_autoload_register();

use App\MyDirExplorer;

$dir = new MyDirExplorer(null, '*');

foreach ($dir->explore(__DIR__) as $item)
{
    echo str_repeat('&nbsp&nbsp&nbsp&nbsp',$item['depth']) . $item['value'] . '<br />';
}