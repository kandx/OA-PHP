<?php
namespace OA\Model;
use Think\Model;

/**
* 用户定义类
*/
class ScheduleModel extends Model
{	

	public function getSchedule($id, $timeStr){
		$scheduleTime = strtotime($timeStr);
		$start_time = date('Y-m-d',$scheduleTime).' '.TIME_START;
		$end_time = date('Y-m-d',$scheduleTime).' '.TIME_END;
		$where['user_id'] = $id;
		$where['begin_time'] = array('between', array($start_time, $end_time));
		return $this->where($where)
					->field('id, title, begin_time, end_time, is_allday, user_id, recorder, color')
					->order('begin_time asc')
					->select();
	}

	public function getSchedulesBetween($id, $begin, $end){
		$begin_time = date('Y-m-d', strtotime($begin)).' '.TIME_START;
		$end_time = date('Y-m-d', strtotime($end)).' '.TIME_END;
		$where['begin_time'] = array('between', array($begin_time, $end_time));
		$where['user_id'] = $id;
		return $this->where($where)
					->field('id, title, begin_time, end_time, is_allday, color')
					->order('begin_time asc')
					->select();
	}

	public function getLeaderSchedule($timeStr, $all=false){
		$user = D('User');
		$leaders = $user->getLeaders($all);
		$data = array();
		$i = 1;
		foreach ($leaders as $k) {
			$schedule = $this->getSchedule($k['id'], $timeStr);
			if($schedule){
				$data[$k['username']]['no'] = $i++;
				$data[$k['username']]['fullname'] = $k['first_name'].$k['last_name'];
				$data[$k['username']]['data'] = $schedule;
			}
			
		}
		return $data;
	}
	
}