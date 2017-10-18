<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/9 0009
 * Time: 下午 9:03
 * 注册页面
 */
namespace App\Http\Controllers\Home;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use DB;
use Mail;
header("content-type:text/html;charset=utf-8");
class RegisterController extends Controller
{
    //注册前的的页面
    public function index()
    {
        return view('home.register.register');
    }

    public function register_add()
    {
        if(Input::has('userName'))
        {
            $userName=Input::get("userName");
            if(Input::has('user_password'))
            {
                $user_pwd=Input::get("user_password");
                if(Input::has('repeatPassword'))
                {
                    $repeatPassword=Input::get("repeatPassword");
                    if($user_pwd==$repeatPassword)
                    {
                        if(Input::has('email'))
                        {
                            $email=Input::get("email");
                            if(Input::has('phone'))
                            {
                                $phone=Input::get("phone");
                                $time=date("Y-m-d H:i:s");
                                $insert=DB::table("user")->insert(array('user_username'=>$userName,'user_password'=>$user_pwd,'user_email'=>$email,'user_phone'=>$phone,'user_time'=>$time));
                                if($insert)
                                {
                                   echo "<script>alert('注册成功');location.href='register1'</script>";
                                }else{
                                    echo "<script>alert('网络繁忙，请稍后重试');location.href='register'</sjcript>";
                                }
                            }else{
                                echo "<script>alert('手机号不能为空，请重新输入');location.href='register'</sjcript>";
                            }
                        }else{
                            echo "<script>alert('邮箱不能为空，请重新输入');location.href='register'</sjcript>";
                        }
                    }else{
                        echo "<script>alert('输入的密码不一致，请重新输入');location.href='register'</sjcript>";
                    }
                }else{
                    echo "<script>alert('确认密码不能为空');location.href='register'</script>";
                }
            }else{
                echo "<script>alert('密码不能为空');location.href='register'</script>";
            }
        }else{
            echo "<script>alert('用户名不能为空');location.href='register'</script>";
        }

    }

    //邮箱验证
  public function send()
  {

      $verification=mt_rand(1000,9999);
      if($verification)
      {
          DB::table("email")->insert(array('e_code'=>$verification));
      }

      Mail::raw("$verification",function($message){
          $message->to('3042458617@qq.com')->subject('提醒最强王者');
          echo "<script>alert('验证码已发送，请注意接收！');location.href='register'</script>";
      });
  }


    public function show()
    {
        return view("home.register.register1");
    }



}