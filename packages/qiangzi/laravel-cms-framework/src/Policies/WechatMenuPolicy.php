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

namespace Qiangzi\LaravelCms\Policies;

use Qiangzi\LaravelCms\Models\User;
use Qiangzi\LaravelCms\Models\WechatMenu;

/**
 * 微信菜单授权策略
 *
 * Class WechatMenuPolicy
 * @package Qiangzi\LaravelCms\Policies
 */
class WechatMenuPolicy extends Policy
{
    public function update(User $user, WechatMenu $wechat_menu)
    {
        return $user->can("manage_wechat");
    }

    public function destroy(User $user, WechatMenu $wechat_menu)
    {
        return $user->can("manage_wechat");
    }
}
