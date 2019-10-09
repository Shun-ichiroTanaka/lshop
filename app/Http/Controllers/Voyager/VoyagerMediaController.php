<?php

namespace App\Http\Controllers\Voyager;

use TCG\Voyager\Http\Controllers\VoyagerMediaController as BaseVoyagerMediaController;

class VoyagerMediaController extends BaseVoyagerMediaController
{
    private function getFiles($dir)
    {
        $files = [];
        setlocale(LC_ALL, 'ja_JP.UTF-8'); //setlocaleを追記
    }
}
