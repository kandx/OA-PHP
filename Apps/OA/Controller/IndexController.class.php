<?php
namespace OA\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->display();
        
    }

    public function login(){
    	if (IS_GET) {
    		$this->redirect(U('Index/index'));
    	} 
    	else if(IS_POST){
    		$user = D('User');
            if($user->login(I('username'), I('password')))
                $this->redirect(U('Index/main'));
            else
                $this->error('用户名或密码不正确！');
    	}
    }

    public function logout(){
        if(session('?uid')){
            $user = D('User');
            if($user->logout(session('uid'))){
                session(null);
                $this->redirect(U('Index/index'));
            }
        }
    }
}