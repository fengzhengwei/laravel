<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/10 0010
 * Time: 下午 3:06
 * 帮助中心
 */
namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
header("content-type:text/html;charset=utf-8");
class HelpController extends Controller
{
         public function index(Request $request)
         {
             $session=$request->session()->get('user');

             return view("home.help.help",['user'=>$session]);
         }
}