<?php
/**
 * Laravel-cms - cms based on laravel
 *
 * @category  Laravel-cms
 * @package   Laravel
 * @author    Qiangzi <35924784@qq.com>
 * @date      2018/06/06 09:08:00
 * @copyright Copyright 2018 LaraCMS
 * @license   https://opensource.org/licenses/MIT
 * @github    https://github.com/35924784/laravel-cms
 * @link      https://www.laracms.cn
 * @version   Release 1.0
 */

namespace Qiangzi\LaravelCms\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use Qiangzi\LaravelCms\Http\Controllers\Api\Controller;
use Qiangzi\LaravelCms\Transformers\PermissionTransformer;

/**
 * 权限控制器
 *
 * Class PermissionsController
 * @package Qiangzi\LaravelCms\Http\Controllers\Api\V1
 */
class PermissionsController extends Controller
{
    /**
     * 列表
     *
     * @return \Dingo\Api\Http\Response
     */
    public function index()
    {
        $permissions = $this->user()->getAllPermissions();

        return $this->response->collection($permissions, new PermissionTransformer());
    }
}
