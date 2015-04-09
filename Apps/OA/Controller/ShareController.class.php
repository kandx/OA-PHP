<?php
namespace OA\Controller;
use OA\Controller\BaseController;
class ShareController extends BaseController {

	public function uploadDocs(){
        $this->hasLogined();
        if(IS_GET){
            $series = M('Fileseries');
            $this->assign('series', $series->field('id, name')->select());
            $dp = M('User');
            $where['id'] = getCurrentUserId();
            $this->assign('department', $dp->where($where)->getField('department_id'));

            $this->display();
        }
        else if(IS_POST){

            $files = D('Files');
            $this->ajaxReturn($files->uploadFile(I('remind_read')));
        
        }
    }

    public function cloud(){
        $this->display();
    }

//*******************************************************************************************



    public function test(){
      
       p(__APP__);

    }
}