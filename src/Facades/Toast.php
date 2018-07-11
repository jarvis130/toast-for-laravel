<?php
/**
 * Created by PhpStorm.
 * User: jarvis
 * Date: 2018/7/11
 * Time: 上午9:37
 */

namespace Biggold\Toast\Facades;

use Illuminate\Support\Facades\Facade;

class Toast extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'toastr';
    }
}