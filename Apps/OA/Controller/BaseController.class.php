<?php
namespace OA\Controller;
use Think\Controller;
class BaseController extends Controller {

	// 控制器基类，定义了一些所有控制器用到的属性和方法


//********************************************************************************

	/**
	  * @access protected
      * @param  $error_str  string  错误提示信息
      * @param  $error_url  string  错误跳转地址           
      * @return            
      * @return author  曾科（kandx@outlook.com）
     */
	protected function hasLogined($error_url='Index/index', $error_str='请先登录后再操作!'){
		if(!isLogin())
			$this->error($error_str, $error_url);
	}

	/**
	  * @access protected
      * @param  $error_str  string  错误提示信息
      * @param  $error_url  string  错误跳转地址           
      * @return            
      * @return author  曾科（kandx@outlook.com）
     */
	protected function hasPermission($method, $error_url='Index/index', $error_str='页面不存在'){
		if(!isLogin()||(!$method)){
			$this->error($error_str, $error_url);
		}
			
	}

	//************************************************************************************
	public function __construct(){
		//调用父类构造函数
		parent::__construct();
	}

}