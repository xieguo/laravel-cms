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

namespace Wanglelecc\Laracms\Observers;

use Wanglelecc\Laracms\Models\WechatResponse;

// creating, created, updating, updated, saving,
// saved,  deleting, deleted, restoring, restored

/**
 * 微信响应观察者
 *
 * Class WechatResponseObserver
 * @package Wanglelecc\Laracms\Observers
 */
class WechatResponseObserver
{
    public function creating(WechatResponse $wechatResponse)
    {
        //
    }

    public function updating(WechatResponse $wechatResponse)
    {
        //
    }

    public function saving(WechatResponse $wechatResponse)
    {
        if(is_array($wechatResponse->content) || is_object($wechatResponse->content)){
            $wechatResponse->content = json_encode($wechatResponse->content, JSON_UNESCAPED_UNICODE);
        }
    }
}