<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

/**
 * 只要指明了命名空间,那么在子路由中所使用的所有控制器都位于App\Http\Controller\Admin这个命名空间下。
 */
/**
 前台首页
 */
Route::group(['prefix' => 'home','namespace' => 'Home'], function(){
    /**
     * 其实控制器r在App\Http\Controller\Admin这个命名空间下。
     */
    //前台首页
    Route::any('index','IndexController@index');

//关于我们
    Route::any('desc','DescController@index');

//登录页面
    Route::any('login','LoginController@index');
    Route::post("l_add",'LoginController@login_add');
    Route::get('captcha/{tmp}', 'LoginController@captcha');
    Route::get('login_out','LoginController@login_out');

//注册页面
    Route::any('register','RegisterController@index');
    Route::post('r_add','RegisterController@register_add');
    Route::get('register1','RegisterController@show');
    Route::get('send','RegisterController@send');


//我要投资
    Route::any('touzi','InvestmentController@index');
    Route::any('info','InvestmentController@info');

//安全保证
    Route::any('help','HelpController@index');

//账户中心
    Route::any('core','PersonalController@index');
    Route::any('open','PersonalController@open');
    Route::any('capital','PersonalController@capital');
    Route::any('record','PersonalController@record');
    Route::any('exchange','PersonalController@exchange');
    Route::any('returned','PersonalController@returned');
    Route::any('red_package','PersonalController@red_package');
    Route::any('withdrawals','PersonalController@withdrawals');
    Route::any('system','PersonalController@system');
    Route::any('account','PersonalController@account');
    Route::any('recharge','PersonalController@recharge');

//我要贷款
    Route::any("lona","LonaController@index");
    Route::post("lona_add","LonaController@lona_add");
    Route::post("lona_xi","LonaController@lona_xi");
    Route::get("lona_show","LonaController@lona_show");

});

//Route::group(['prefix' => 'home','namespace' => 'Home'], function()
//{
//    Route::any('login','LoginController@login');
//});





