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

namespace Qiangzi\LaravelCms\Models;

use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\SoftDeletes;
use Qiangzi\LaravelCms\Events\BehaviorLogEvent;

/**
 * 导航模型
 *
 * Class Navigation
 * @package Qiangzi\LaravelCms\Models
 */
class Navigation extends Model
{
    use SoftDeletes;
    protected $fillable = ['id','category', 'type', 'title', 'description', 'target', 'link', 'image', 'icon', 'parent', 'path', 'params', 'order', 'is_show'];
    
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
    
    
    public $dispatchesEvents  = [
        'saved' => BehaviorLogEvent::class,
    ];

    public function titleName(){
        return 'title';
    }
    
    /**
     * 清除缓存
     *
     * @param $id
     * @param $category
     *
     * @return bool
     */
    public static function clearCache($id, $category = 'desktop'){
        $key = 'navigation_cache_'.$category;
        \Cache::forget($key);
    
        $key = 'navigation_item_cache_'.$id;
        \Cache::forget($key);
        
        return true;
    }
    
}