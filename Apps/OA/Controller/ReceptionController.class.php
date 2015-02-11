<?php
namespace OA\Controller;
use OA\Controller\BaseController;
class ReceptionController extends BaseController {

	//***********************************************************************************
	//一些内部处理的方法

	private function createReceptionData(){

	}

	private function saveReception(){

	}

	//************************************************************************************
	//页面Action
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

    //**************************************************************************************
    //以下是响应网页AJAX的方法
    //获取日程安排，并在日历上显示
    public function getReception(){
    	$this->hasPermission(IS_AJAX);
    	$rp = D('Reception');
    	$this->ajaxReturn($rp->getReceptionCalendar());
        
    }

    //根据已选择的接待处室，获取剩余处室
    public function getAssistDepartments(){
    	$this->hasPermission(IS_AJAX);
    	$exceptId = I('id');
    	$dp = D('Department');
    	$departments = $dp->getDepartmentsExcept($exceptId);
    	$this->ajaxReturn($departments);
    }

    //获取接待人员列表
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

    //检测预约时间是否存在冲突
    public function checkTimeConflict(){
    	$this->hasPermission(IS_AJAX);
    	$wantStart = I('start');
    	$wantEnd = I('end');
    	$roomId = I('id');
    	$day = date('Y-m-d', strtotime($wantStart));
    	$rb = D('RoomBooking');
    	$receptions = $rb->getRoomSchedule($roomId,$day);
    	$conflictReceptions = array();
    	if($receptions){
    		foreach ($receptions as $item) {
    			if(isTimeConflict($item['start'], $item['end'], $wantStart, $wantEnd))
    				$conflictReceptions[] = $item;
    		}
    		if($conflictReceptions)
    			$this->ajaxReturn($conflictReceptions);
    		else
    			$this->ajaxReturn(-1);
    	}
    	else
    		$this->ajaxReturn(-1);
    }

    public function receptionInfo(){
    	$this->hasPermission(IS_AJAX);
    	$id = I('id');
    	$rp = D('Reception');
    	$reception = $rp->getReception($id);
    	if($reception){
    		$data['vistor'] = $reception['vistor'];
    		$data['count'] = $reception['visitor_count'];
    		$vp = D('Viewplace');
    		$data['visit_places'] = $vp->linkPlaces($reception['visit_places']);
    		$data['leaders'] = getMemberName($reception['reception_leader']);
    		$data['department'] = getDepartmentName($reception['major_department']);
    		$data['time'] = date("Y年n月j日 H:i", strtotime($reception['begin_time']))." - ".date('H:i', strtotime($reception['end_time']));
    		$rb = D('RoomBooking');
    		$bookedInfo = $rb->getRoomBookedInfo($reception['id'], 'R');
    		if($bookedInfo){
    			foreach ($bookedInfo as $k) {
    				if($k['name']=="展厅")
    					$data['hall'] = date('H:i', strtotime($k['begin_time']))." - ".date('H:i', strtotime($k['end_time']));
    				else
    					$data['meeting'] = date('H:i', strtotime($k['begin_time']))." - ".date('H:i', strtotime($k['end_time']));
    			}
    		}
    		$data['delete'] = $reception['recorder_id']==getCurrentUserId()?1:0;
    		$this->ajaxReturn($data);
    	}
    	else
    		$this->ajaxReturn(-1);
    }

//*******************************************************************************************



    public function test(){
        p(getMemberName(5));

    }
}