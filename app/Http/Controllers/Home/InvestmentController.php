<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/9 0009
 * Time: 下午 9:09
 * 投资页面
 */
namespace App\Http\Controllers\Home;
use DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
header("content-type:text/html;charset=utf-8");
class InvestmentController extends Controller{
    public function index(Request $request)
    {
        $user=$request->session()->get('user');

        return view("home.investment.list",['user'=>$user]);
    }

    public function info()
    {
        return view("home.investment.infor");
    }
}
