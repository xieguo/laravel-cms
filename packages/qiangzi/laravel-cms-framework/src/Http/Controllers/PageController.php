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

namespace Wanglelecc\Laracms\Http\Controllers;

use Illuminate\Http\Request;
use Wanglelecc\Laracms\Models\Page;
use Wanglelecc\Laracms\Models\Navigation;

/**
 * 页面控制器
 *
 * Class PageController
 * @package Wanglelecc\Laracms\Http\Controllers
 */
class PageController extends Controller
{
    /**
     * 页面详情
     *
     * @param int $navigation
     * @param Page $safePage
     * @return mixed
     */
    public function show($navigation = 0, Page $safePage)
    {
        $page = $safePage;
        $page->increment('views');
        return frontend_view('page.'.$page->getTemplate(), compact('page'));
    }
}
