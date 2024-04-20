<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Test;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index(){
        dd('test');
        //Eloquent(エロクアント)ー＞こっちを使う方がメリットが大きいからエロクアントを使う
        $values = Test::all();

        $count = Test::count();

        $first = Test::findOrFail(1);

        $whereBBB = Test::where('text','=','bbb')->get();  //=>get でEloquentの表示がcollectionに変更できる


        //クエリビルダ->エロくアントより処理が早い

        $queryBuilder = DB::table('tests')->where('text','=','bbb')
        ->select('id','text')
        ->get();//=>get でEloquentの表示がcollectionに変更できる

        dd($values,$count,$first,$whereBBB,$queryBuilder);//die+var_dump

        return view('tests.test',compact('values'));
    }
}
