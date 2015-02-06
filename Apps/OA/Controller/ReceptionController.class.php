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

    public function receptionForm(){

    	$vp = M('Viewplace');
    	$this->assign('places', $vp->field('id, name')->select());
    	
    	$dp = M('Department');
    	$where['id'] = array('neq', 1);
    	$this->assign('departments', $dp->field('id, short_name')->where($where)->select());

    	$room = M('Room');
    	$cond['name'] = array('neq', '展厅');
    	$this->assign('rooms', $room->where($cond)->select());

    	$users = D('User');
    	$this->assign('leaders', $users->getLeaders(true));

    	$this->assign('start', I('start'));
    	$this->assign('end', I('end'));
    	$this->display();

    }

    public function getReception(){
        
    }

    public function getAssistDepartments(){
    	$this->hasPermission(IS_AJAX);
    	$exceptId = I('id');
    	$dp = D('Department');
    	$departments = $dp->getDepartmentsExcept($exceptId);
    	$this->ajaxReturn($departments);
    }

    public function getReceptionist(){
    	$this->hasPermission(IS_AJAX);
    	$ids = I('id');
    	$users = D('User');
    	$staff = array();
    	if(is_array($ids)){
    		foreach ($ids as $id) {
    			$members = $users->getStaff($id);
    			$staff = array_merge($staff, $members);
    		}
    	}
    	$this->ajaxReturn($staff);
    }

    public function checkReceptionTime(){
    	$this->hasPermission(IS_AJAX);
    	$wantStart = I('start');
    	$wantEnd = I('end');
    	$day = date('Y-m-d', strtotime($wantStart));
    	$rp = D('Reception');
    	$receptions = $rp->getReceptionForDay($day);
    	$conflictReceptions = array();
    	if($receptions){
    		foreach ($receptions as $item) {
    			if(isTimeConflict($item['begin_time'], $item['end_time'], $wantStart, $wantEnd))
    				$conflictReceptions[] = $item;
    		}
    		if($conflictReceptions)
    			$this->ajaxReturn($conflictReceptions);
    		else
    			$this->ajaxReturn("时间没有冲突");
    	}
    	$this->ajaxReturn("时间没有冲突");
    }




    public function test(){
        $users = D('User');
        $staff = array();
        $ids = array(3, 4, 6);
        if(is_array($ids)){
        	foreach ($ids as $k => $v) {
        		$members = $users->getStaff($v);
        		$staff = array_merge($staff, $members);
        	}
        }
        p($staff);
        

    }
}