<?php
namespace OA\Controller;
use OA\Controller\BaseController;
class ReceptionController extends BaseController {

	//***********************************************************************************
	//一些内部处理的方法

	//生成Rectption数据的方法
	private function createReceptionData(){
		$data = array(
			'vistor' => I('vistor'),
			'visit_content' => I('visit_content'),
			'visit_leader' => I('visit_leader'),
			'contact' => I('contact'),
			'phone' => I('phone'),
			'visitor_count' => I('visitor_count'),
			'begin_time' => I('begin_time'),
			'end_time' => I('end_time'),
			'major_department' => I('major_department'),
			'is_speech' => I('is_speech'),
			'is_meal' => I('is_meal'),
			'recorder_id' => getCurrentUserId()
			);
		//$data['vistor'] = I('vistor');
		if(!empty(I('assist_department'))){
			$data['assist_department'] = implode(",", I('assist_department'));
		}
		if(!empty(I('receptionist')))
			$data['receptionist'] = implode(",", I('receptionist'));
		if(!empty(I('view_places')))
			$data['visit_places'] = implode(",", I('view_place'));
		if(I('append_other_place')==1){
			if(I('other_place')){
				$vp = M('Viewplace');
				$data['name'] = I('other_place');
				$vpId = $vp->add($data);
				if($vpId)
					$data['visit_places'] .= ','.$vpId;
			}
		}

		return $data;
	}

	private function getBookedData($receptionId){
		$data = array();
		if(!empty(I('hall_start_time'))&&!empty(I('hall_end_time'))){
			$data[] = array(
				'room_id' => I('hall_id'),
				'event_type' => 'R',
				'event_id' => $receptionId,
				'begin_time' => I('hall_start_time'),
				'end_time' => I('hall_end_time'),
				'book_person' => getCurrentUserId()
				);
		}
		if(!empty(I('room_start_time'))&&I('room_end_time')){
			$data[] = array(
				'room_id' => I('room_id'),
				'event_type' => 'R',
				'event_id' => $receptionId,
				'begin_time' => I('room_start_time'),
				'end_time' => I('room_end_time'),
				'book_person' => getCurrentUserId()
				);
		}
		return $data;
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
        	$errors = array();
            $reception = $this->createReceptionData();
            $rp = D('Reception');
            //开始写入逻辑
            $rp->startTrans();
            //添加reception记录
            if($rp->create($reception)){
            	$receptionId = $rp->add($reception);
            	if(!$receptionId){
            		$errors[] = $rp->getError();
            	}
            }
            else{
            	$errors[] = $rp->getError();
            }
            //添加预定展厅，会议室情况
            $roomBookData = $this->getBookedData();
            if($roomBookData){
            	$rb = M('RoomBooking');
            	foreach ($roomBookData as $k) {
            		$bookId = $rb->add($k);
            		if(!$bookId){
            			$errors[] = $rb->getError();
            			break;
            		}
            	}
            }
            //邮件提醒
            //判断是否提交
            if(!empty($errors)){
            	$rp->rollback();
            	$this->ajaxReturn($errors);
            }
            else{
            	$rp->commit();
            	$this->ajaxReturn(1);
            }
            

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
    		$data['id'] = $reception['id'];
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
       $ids = array(1,2,3,4);
       p(implode(",", $ids));
       p(empty($b));
       $b = null;
       p(empty($b));

    }
}