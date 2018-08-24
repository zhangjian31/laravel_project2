<?php
/**
 * Created by PhpStorm.
 * User: zhangjian
 * Date: 2018/8/24
 * Time: 下午5:02
 */
namespace App\Http\Middleware;
use Closure;

class VerifyAdmin
{
    public function handle($request, Closure $next)
    {
        return $next($request);
    }
}
