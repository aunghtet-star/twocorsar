<?php

namespace App\Helper;

use App\Models\Two;

class ForTwo
{
    public static function Two($two,$amount){
        $two = Two::where('two', $two)->first();
        $two->increment('amount', $amount);
        $two->update();
    }
}
