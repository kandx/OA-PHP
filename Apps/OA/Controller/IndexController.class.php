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
    		$this->display();
    	}

    }
}