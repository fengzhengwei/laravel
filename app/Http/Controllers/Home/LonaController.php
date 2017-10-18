<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/14 0014
 * Time: 上午 9:25
 * 贷款页面
 */
namespace App\Http\Controllers\Home;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
header("content-type:text/html;charset=utf-8");

class LonaController extends Controller
{
    public function index(Request $request)
    {
        $user=$request->session()->get('user');

        $type=DB::table("lend_type")->get();

        return view("home.lona.lona",['type'=>$type,'user'=>$user]);
    }


    public function lona_add()
    {
        $file=$_FILES;

        //贷款人照片
        $people_image_name=$file['people_image']['name'];
        $people_image_path='upload'.'/'.$people_image_name;
        move_uploaded_file($file['people_image']['tmp_name'],$people_image_path);

        //抵押物照片
        $goods_image_name=$file['goods_image']['name'];
        $goods_image_path='upload'.'/'.$goods_image_name;
        move_uploaded_file($file['goods_image']['tmp_name'],$goods_image_path);

        $t_id=Input::get("t_id");
        $time=date("Y-m-d H:i:s");
        $lend_money=Input::get("lend_money");
        $lend_desc=Input::get("lend_desc");

        $lend_add=DB::table("lend")->insert(array('lend_time'=>$time,'lend_money'=>$lend_money,'lend_desc'=>$lend_desc,'t_id'=>$t_id,'lend_people_image'=>$people_image_path,'lend_goods_image'=>$goods_image_name));

        if($lend_add)
        {
            echo "<script>location.href='lona_show'</script>";
        }
    }

    //贷款展示页面
    public function lona_show()
    {
        return view("home.lona.lona_show");
    }

    //利息
    public function lona_xi()
    {
        $lend_money= $_POST['lend_money'];
        $xi=$_POST['xi'];
        $select=DB::table("lend_type")->where("t_id",$xi)->first();
        $Interest=$select->t_interest;

        $money=$lend_money*$Interest;

        $data['interest']=$Interest;
        $data['money']=$money;

        echo json_encode($data);
    }
}