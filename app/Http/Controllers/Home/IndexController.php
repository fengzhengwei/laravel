<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/9 0009
 * Time: 下午 9:09
 * 首页
 */
namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller{
    public function index(Request $request)
    {
        $user=$request->session()->get('user');

        return view("home.index.index",['user'=>$user]);
    }

}
