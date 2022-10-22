<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(Request $request)
    {
        $var = 100;

        self::addOne($var);

        self::multTwo($var);

        self::divideTwo($var);

        self::powerTwo($var);
    }

    private static function addOne(&$num)
    {
        $num = $num + 1;
    }

    private static function multTwo(&$num)
    {
        $num = $num * 2;
    }

    private static function divideTwo(&$num)
    {
        $num = $num / 2;
    }

    private static function powerTwo(&$num)
    {
        $num = $num ^ 2;
    }
}
