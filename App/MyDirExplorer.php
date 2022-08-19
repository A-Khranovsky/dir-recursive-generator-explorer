<?php

namespace App;

class MyDirExplorer
{
    private $fileInfo, $extension;

    public function __construct($fileInfo = ['condition' => '>', 'value' => 0], $extension = '*')
    {
        if(is_null($fileInfo)){
            $this->fileInfo = ['condition' => '>', 'value' => 0];
        } else {
            $this->fileInfo = $fileInfo;
        }
        $this->extension = $extension;
    }

    public function explore($dir, &$depth = 0)
    {
        if (is_dir($dir)) {
            if ($dh = opendir($dir)) {
                while (($file = readdir($dh)) !== false) {
                    if (is_dir($file)) {
                        if (($file != '.') && ($file != '..')) {
                            $depth++;
                            yield ['depth' => $depth, 'value' => 'dir ' . $file];
                            chdir($file);
                            yield from $this->explore(getcwd(), $depth);
                        }
                    } else {
                        if ($this->filter(filesize($file), pathinfo($file, PATHINFO_EXTENSION))) {
                            yield ['depth' => $depth, 'value' => 'file ' . $file];
                        }
                    }
                }
                chdir('..');
                $depth--;
                closedir($dh);
            }
        }
    }

    private function filter(int|false $fileSize, string $extension)
    {
        return (
            (
                ($fileSize < $this->fileInfo['value'] && $this->fileInfo['condition'] == '<')
                ||
                ($fileSize > $this->fileInfo['value'] && $this->fileInfo['condition'] == '>')
            )
            &&
            (
                $this->extension == '*' ? true : $this->extension == $extension
            )
        );
    }
}