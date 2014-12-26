<?php
namespace OA\Controller;
use OA\Controller\BaseController;
class ReceptionController extends BaseController {

    public function addReception(){
        $this->hasLogined();
        $vp = M('Viewplace');
        $this->assign('places', $vp->field('id, name')->select());
        $dp = M('Department');
        $this->assign('departments', $dp->field('id, short_name')->select());

        $this->display();
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