<?php

namespace App\Http\Controllers;

use App\Helper\ForTwo;
use App\Http\Requests\Digit;
use App\Models\Two;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TwoController extends Controller
{
    public function index(){
        $twos = Two::all();
        $total = Two::select('amount')->sum('amount');

        return view('two.index',compact('twos','total'));
    }

    public function clean(){
        DB::table('twos')->update(['amount' => 0]);
        return 'success';
    }

    public function form00(Digit $request)
    {
        ForTwo::Two($request->two,$request->amount);
        return back();
    }

    public function form01(Digit $request)
    {
        ForTwo::Two($request->two,$request->amount);
        return back();
    }

    public function form02(Digit $request)
    {
        ForTwo::Two($request->two,$request->amount);
        return back();
    }

    public function form03(Digit $request)
    {
        ForTwo::Two($request->two,$request->amount);
        return back();
    }

    public function form04(Digit $request)
    {
        ForTwo::Two($request->two,$request->amount);
        return back();
    }

    public function form05(Digit $request)
    {
        ForTwo::Two($request->two,$request->amount);
        return back();
    }

    public function form06(Digit $request)
    {
        ForTwo::Two($request->two,$request->amount);
        return back();
    }

    public function form07(Digit $request)
    {
        ForTwo::Two($request->two,$request->amount);
        return back();
    }

    public function form08(Digit $request)
    {
        ForTwo::Two($request->two,$request->amount);
        return back();
    }

    public function form09(Digit $request)
    {
        ForTwo::Two($request->two,$request->amount);
        return back();
    }

    public function form10(Digit $request)
    {
        ForTwo::Two($request->two,$request->amount);
        return back();
    }

    public function form11(Digit $request)
    {
        ForTwo::Two($request->two,$request->amount);
        return back();
    }

    public function form12(Digit $request)
    {
        ForTwo::Two($request->two,$request->amount);
        return back();
    }

    public function form13(Digit $request)
    {
        ForTwo::Two($request->two,$request->amount);
        return back();
    }

    public function form14(Digit $request)
    {
        ForTwo::Two($request->two,$request->amount);
        return back();
    }

    public function form15(Digit $request)
    {
        ForTwo::Two($request->two,$request->amount);
        return back();
    }

    public function form16(Digit $request)
    {
        ForTwo::Two($request->two,$request->amount);
        return back();
    }

    public function form17(Digit $request)
    {
        ForTwo::Two($request->two,$request->amount);
        return back();
    }

    public function form18(Digit $request)
    {
        ForTwo::Two($request->two,$request->amount);
        return back();
    }

    public function form19(Digit $request)
    {
        ForTwo::Two($request->two,$request->amount);
        return back();
    }

    public function form20(Digit $request)
    {
        ForTwo::Two($request->two,$request->amount);
        return back();
    }

    public function form21(Digit $request)
    {
        ForTwo::Two($request->two,$request->amount);
        return back();
    }

    public function form22(Digit $request)
    {
        ForTwo::Two($request->two,$request->amount);
        return back();
    }

    public function form23(Digit $request)
    {
        ForTwo::Two($request->two,$request->amount);
        return back();
    }

    public function form24(Digit $request)
    {
        ForTwo::Two($request->two,$request->amount);
        return back();
    }

    public function form25(Digit $request)
    {
        ForTwo::Two($request->two,$request->amount);
        return back();
    }

    public function form26(Digit $request)
    {
        ForTwo::Two($request->two,$request->amount);
        return back();
    }

    public function form27(Digit $request)
    {
        ForTwo::Two($request->two,$request->amount);
        return back();
    }

    public function form28(Digit $request)
    {
        ForTwo::Two($request->two,$request->amount);
        return back();
    }

    public function form29(Digit $request)
    {
        ForTwo::Two($request->two,$request->amount);
        return back();
    }

    public function form30(Digit $request)
    {
        ForTwo::Two($request->two,$request->amount);
        return back();
    }

    public function form31(Digit $request)
    {
        ForTwo::Two($request->two,$request->amount);
        return back();
    }

    public function form32(Digit $request)
    {
        ForTwo::Two($request->two,$request->amount);
        return back();
    }

    public function form33(Digit $request)
    {
        ForTwo::Two($request->two,$request->amount);
        return back();
    }

    public function form34(Digit $request)
    {
        ForTwo::Two($request->two,$request->amount);
        return back();
    }

    public function form35(Digit $request)
    {
        ForTwo::Two($request->two,$request->amount);
        return back();
    }

    public function form36(Digit $request)
    {
        ForTwo::Two($request->two,$request->amount);
        return back();
    }

    public function form37(Digit $request)
    {
        ForTwo::Two($request->two,$request->amount);
        return back();
    }

    public function form38(Digit $request)
    {
        ForTwo::Two($request->two,$request->amount);
        return back();
    }

    public function form39(Digit $request)
    {
        ForTwo::Two($request->two,$request->amount);
        return back();
    }

    public function form40(Digit $request)
    {
        ForTwo::Two($request->two,$request->amount);
        return back();
    }

    public function form41(Digit $request)
    {
        ForTwo::Two($request->two,$request->amount);
        return back();
    }

    public function form42(Digit $request)
    {
        ForTwo::Two($request->two,$request->amount);
        return back();
    }

    public function form43(Digit $request)
    {
        ForTwo::Two($request->two,$request->amount);
        return back();
    }

    public function form44(Digit $request)
    {
        ForTwo::Two($request->two,$request->amount);
        return back();
    }

    public function form45(Digit $request)
    {
        ForTwo::Two($request->two,$request->amount);
        return back();
    }
    public function form46(Digit $request)
    {
        ForTwo::Two($request->two,$request->amount);
        return back();
    }

    public function form47(Digit $request)
    {
        ForTwo::Two($request->two,$request->amount);
        return back();
    }
    public function form48(Digit $request)
    {
        ForTwo::Two($request->two,$request->amount);
        return back();
    }

    public function form49(Digit $request)
    {
        ForTwo::Two($request->two,$request->amount);
        return back();
    }
    public function form50(Digit $request)
    {
        ForTwo::Two($request->two,$request->amount);
        return back();
    }

    public function form51(Digit $request)
    {
        ForTwo::Two($request->two,$request->amount);
        return back();
    }

    public function form52(Digit $request)
    {
        ForTwo::Two($request->two,$request->amount);
        return back();
    }

    public function form53(Digit $request)
    {
        ForTwo::Two($request->two,$request->amount);
        return back();
    }

    public function form54(Digit $request)
    {
        ForTwo::Two($request->two,$request->amount);
        return back();
    }

    public function form55(Digit $request)
    {
        ForTwo::Two($request->two,$request->amount);
        return back();
    }

    public function form56(Digit $request)
    {
        ForTwo::Two($request->two,$request->amount);
        return back();
    }

    public function form57(Digit $request)
    {
        ForTwo::Two($request->two,$request->amount);
        return back();
    }

    public function form58(Digit $request)
    {
        ForTwo::Two($request->two,$request->amount);
        return back();
    }

    public function form59(Digit $request)
    {
        ForTwo::Two($request->two,$request->amount);
        return back();
    }

    public function form60(Digit $request)
    {
        ForTwo::Two($request->two,$request->amount);
        return back();
    }

    public function form61(Digit $request)
    {
        ForTwo::Two($request->two,$request->amount);
        return back();
    }

    public function form62(Digit $request)
    {
        ForTwo::Two($request->two,$request->amount);
        return back();
    }

    public function form63(Digit $request)
    {
        ForTwo::Two($request->two,$request->amount);
        return back();
    }

    public function form64(Digit $request)
    {
        ForTwo::Two($request->two,$request->amount);
        return back();
    }

    public function form65(Digit $request)
    {
        ForTwo::Two($request->two,$request->amount);
        return back();
    }

    public function form66(Digit $request)
    {
        ForTwo::Two($request->two,$request->amount);
        return back();
    }

    public function form67(Digit $request)
    {
        ForTwo::Two($request->two,$request->amount);
        return back();
    }

    public function form68(Digit $request)
    {
        ForTwo::Two($request->two,$request->amount);
        return back();
    }

    public function form69(Digit $request)
    {
        ForTwo::Two($request->two,$request->amount);
        return back();
    }

    public function form70(Digit $request)
    {
        ForTwo::Two($request->two,$request->amount);
        return back();
    }

    public function form71(Digit $request)
    {
        ForTwo::Two($request->two,$request->amount);
        return back();
    }

    public function form72(Digit $request)
    {
        ForTwo::Two($request->two,$request->amount);
        return back();
    }

    public function form73(Digit $request)
    {
        ForTwo::Two($request->two,$request->amount);
        return back();
    }

    public function form74(Digit $request)
    {
        ForTwo::Two($request->two,$request->amount);
        return back();
    }

    public function form75(Digit $request)
    {
        ForTwo::Two($request->two,$request->amount);
        return back();
    }

    public function form76(Digit $request)
    {
        ForTwo::Two($request->two,$request->amount);
        return back();
    }

    public function form77(Digit $request)
    {
        ForTwo::Two($request->two,$request->amount);
        return back();
    }

    public function form78(Digit $request)
    {
        ForTwo::Two($request->two,$request->amount);
        return back();
    }

    public function form79(Digit $request)
    {
        ForTwo::Two($request->two,$request->amount);
        return back();
    }

    public function form80(Digit $request)
    {
        ForTwo::Two($request->two,$request->amount);
        return back();
    }

    public function form81(Digit $request)
    {
        ForTwo::Two($request->two,$request->amount);
        return back();
    }
    public function form82(Digit $request)
    {
        ForTwo::Two($request->two,$request->amount);
        return back();
    }
    public function form83(Digit $request)
    {
        ForTwo::Two($request->two,$request->amount);
        return back();
    }
    public function form84(Digit $request)
    {
        ForTwo::Two($request->two,$request->amount);
        return back();
    }
    public function form85(Digit $request)
    {
        ForTwo::Two($request->two,$request->amount);
        return back();
    }

    public function form86(Digit $request)
    {
        ForTwo::Two($request->two,$request->amount);
        return back();
    }

    public function form87(Digit $request)
    {
        ForTwo::Two($request->two,$request->amount);
        return back();
    }

    public function form88(Digit $request)
    {
        ForTwo::Two($request->two,$request->amount);
        return back();
    }
    public function form89(Digit $request)
    {
        ForTwo::Two($request->two,$request->amount);
        return back();
    }

    public function form90(Digit $request)
    {
        ForTwo::Two($request->two,$request->amount);
        return back();
    }

    public function form91(Digit $request)
    {
        ForTwo::Two($request->two,$request->amount);
        return back();
    }

    public function form92(Digit $request)
    {
        ForTwo::Two($request->two,$request->amount);
        return back();
    }

    public function form93(Digit $request)
    {
        ForTwo::Two($request->two,$request->amount);
        return back();
    }

    public function form94(Digit $request)
    {
        ForTwo::Two($request->two,$request->amount);
        return back();
    }

    public function form95(Digit $request)
    {
        ForTwo::Two($request->two,$request->amount);
        return back();
    }

    public function form96(Digit $request)
    {
        ForTwo::Two($request->two,$request->amount);
        return back();
    }

    public function form97(Digit $request)
    {
        ForTwo::Two($request->two,$request->amount);
        return back();
    }

    public function form98(Digit $request)
    {
        ForTwo::Two($request->two,$request->amount);
        return back();
    }

    public function form99(Digit $request){
        ForTwo::Two($request->two,$request->amount);
        return back();
    }
}
