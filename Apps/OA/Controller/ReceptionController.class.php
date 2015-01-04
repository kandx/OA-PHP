<?php
namespace OA\Controller;
use OA\Controller\BaseController;
class ReceptionController extends BaseController {

    public function addReception(){
        $this->hasLogined();
        if(IS_GET){
            $vp = M('Viewplace');
            $this->assign('places', $vp->field('id, name')->select());
            $dp = M('Department');
            $where['id'] = array('neq', 1);
            $this->assign('departments', $dp->field('id, short_name')->where($where)->select());

            $this->display();
        }
        else if(IS_POST){
            p($_POST);
        }
        
    }

    public function getReception(){
        
    }




    public function test(){
        $users = D('User');
        
        p($users->getDepartLeader(getCurrentUserId()));
        // if($time)
        //     p('zero time is not false');
        // else
        //     p('zero time is false');

    }
}