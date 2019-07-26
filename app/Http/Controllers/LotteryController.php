<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lottery;


class LotteryController extends Controller
{
    public function getLottery(){
    	$lottery = Lottery::all();
    	dd($lottery[rand(0,$lottery->count()-1)]->lotteryNumber);
    	return view('user.lottery' , compact('lottery'));
    }
}
