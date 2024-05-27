<?php

namespace App\Http\Controllers;

use Valorin\Random\Random;

class GeneratorController extends Controller
{
    public function index()
    {
        $number = Random::number(1, 100000);
        echo __('Generate random number: ') . $number . PHP_EOL;
        $otp = Random::otp(8);
        echo __('Generate random one-time password: ') . $otp . PHP_EOL;
        $length = 32;
        $letters = Random::letters($length);
        echo __('Generate random letters: ') . $letters . PHP_EOL;
        $token = Random::token($length);
        echo __('Generate random token: ') . $token . PHP_EOL;
        $password = Random::password($length);
        echo __('Generate random password without dash: ') . $password . PHP_EOL;
        $password = Random::dashed($length);
        echo __('Generate random password with dash: ') . $password . PHP_EOL;
    }
}
