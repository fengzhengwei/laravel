<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/9 0009
 * Time: 下午 8:14
 * 登录页面
 */
namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use DB;
use Gregwar\Captcha\CaptchaBuilder;
use Session;
use App\Http\Requests;

header("content-type:text/html;charset=utf-8");
class LoginController extends Controller
{
  public function index()
  {
      return view('home.login.login');
  }

  /*
   *登录
   * */
  public function login_add(Request $request)
  {
      $user=Input::get("j_username");
      $pwd=Input::get("password");
      $code=Input::get("code");

      if(Session::get('milkcaptcha')!=$code)
      {
         echo "<script>alert('验证码错误，请重新输入！');location.href='login'</script>";
      }else{
          $select=DB::select("select * from `user` where user_username='$user' and user_password='$pwd'");
          foreach($select as $k => $v){
              $data[] = $v->user_id;
          }

          $user_id=$data[0];

          if($select)
          {
              $request->session()->put('user',$user);
              $request->session()->put('user_id',$user_id);
              echo "<script>alert('登录成功');location.href='index'</script>";
          }
      }
  }


    /**
     * 验证码生成
     * @param  [type] $tmp [description]
     * @return [type]      [description]
     */
    public function captcha($tmp)
    {
        //生成验证码图片的Builder对象，配置相应属性
        $builder = new CaptchaBuilder;
        //可以设置图片宽高及字体
        $builder->build($width = 100, $height = 40, $font = null);
        //获取验证码的内容
        $phrase = $builder->getPhrase();
        //把内容存入session
        Session::flash('milkcaptcha', $phrase);
        //生成图片
        header("Cache-Control: no-cache, must-revalidate");
        header('Content-Type: image/jpeg');
        $builder->output();
    }


    /*
     * 退出登录
     * */
    public function login_out()
    {
        Session::forget('user');
        return redirect('home/login/login');
    }


}