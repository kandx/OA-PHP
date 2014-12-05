<?php
namespace OA\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $d = M('Duty');
        $l = M('Level');
        $depart = M('Department');
        $this->assign('departments', $depart->field('id, name')->select());
        $this->assign('levels', $l->field('id, name')->select());
        $this->assign('duties', $d->field('id, name')->select());
        $this->display();
        
    }

    public function login(){
    	if (IS_GET) {
    		$this->redirect('Index/index');
    	} 
    	else if(IS_POST){
    		$user = D('User');
            if($user->login(I('username'), I('password')))
                $this->redirect('Index/main');
            else
                $this->error('用户名或密码不正确！');
    	}
    }

    public function logout(){
        if(session('?uid')){
            $user = D('User');
            $user->logout(session('uid'));
        }
        $this->redirect('Index/index');
    }

    public function register(){
        dump($_POST);
    }

    public function main(){

        $saying = D('Saying');
        $this->assign('saying', $saying->getRandom());

        $schedule = D('Schedule');
        $this->assign('schedules', $schedule->getLeaderSchedule(date('Y-m-d H:i'), true, true));

        $this->display();
    }

    public function test(){
        $s = D('User');
        dump($s->getLeaders(true));
    }
}