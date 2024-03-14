<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
// 上記のようにuseで使用するコントローラーを宣言しないと使えない

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}
