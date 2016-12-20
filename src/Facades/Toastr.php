<?php

/**
 * Created by PhpStorm.
 * User: zhangxiaomin
 * Date: 2016/12/20
 * Time: 下午4:42
 */
namespace Shawn\Toastr\Facades;
use Illuminate\Support\Facades\Facade;

class Toastr extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'toastr';
    }
}