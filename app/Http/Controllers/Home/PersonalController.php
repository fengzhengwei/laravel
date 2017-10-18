<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/10 0010
 * Time: 下午 7:11
 * 个人中心
 */
namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Input;
header("content-type:text/html;charset=utf-8");
class PersonalController extends Controller
    {
    //个人中心首页
       public function index(Request $request)
       {
           $user=$request->session()->get('user');

           return view("home/core/core",['user'=>$user]);
       }

     //开通第三方
    public function open(Request $request)
    {
      $user=$request->session()->get('user');
      return view("home/core/open",['user'=>$user]);
    }

    //开通第三方展示
    public function open_show(Request $request)
    {
        $user=$request->session()->get('user');
        return view("home/core/open1",['user'=>$user]);
    }

    //资金记录
    public function capital(Request $request)
    {
        $user=$request->session()->get('user');
        return view("home/core/capital",['user'=>$user]);
    }

    //充值
    public function recharge(Request $request)
    {
        $user=$request->session()->get('user');
        return view("home/core/recharge",['user'=>$user]);
    }

    //投资记录
    public function record(Request $request)
    {
        $user=$request->session()->get('user');
        return view("home/core/record",['user'=>$user]);
    }

    //兑换历史
    public function exchange(Request $request)
    {
        $user=$request->session()->get('user');
        return view("home/core/exchange",['user'=>$user]);
    }

    //回款计划
    public function returned(Request $request)
    {
        $user=$request->session()->get('user');
        return view("home/core/returned",['user'=>$user]);
    }

    //我的红包
    public function red_package(Request $request)
    {
        $user=$request->session()->get('user');
        return view("home/core/red_package",['user'=>$user]);
    }

    //提现
    public function withdrawals(Request $request)
    {
        $user=$request->session()->get('user');
        return view("home/core/withdrawals",['user'=>$user]);
    }

    //提现展示
    public function withdrawals_show(Request $request)
    {
        $user=$request->session()->get('user');
        return view("home/core/withdrawals_show",['user'=>$user]);
    }

    //系统信息
    public function system(Request $request)
    {
        $user=$request->session()->get('user');
        return view("home/core/system",['user'=>$user]);
    }

    //账号设置
    public function account(Request $request)
    {
        $user=$request->session()->get('user');
        return view("home/core/account",['user'=>$user]);
    }

}