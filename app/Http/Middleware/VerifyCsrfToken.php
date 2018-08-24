<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     * 在测试 POST 请求之前，需要将对应路由取消 CSRF 保护检查，否则会返回 419 状态码导致无法请求成功
     * @var array
     */
    protected $except = [
        'foo','bar'
    ];
}
