<?php
namespace OA\Model;
use Think\Model;

/**
* 用户定义类
*/
class ScheduleModel extends Model
{	

	public function getSchedule($id, $timeStr, $format=fasle){
		$scheduleTime = strtotime($timeStr);
		$start_time = date('Y-m-d',$scheduleTime).' '.TIME_START;
		$end_time = date('Y-m-d',$scheduleTime).' '.TIME_END;
		$where['user_id'] = $id;
		$where['begin_time'] = array('between', array($start_time, $end_time));
		$schedule = $this->where($where)->order('begin_time asc')->select();
		
		//判断日程是：过期（p)、当前日程(n)、未来日程(f)
		//根据条件格式化时间
		$isLastSchedulePass = true;
		foreach ($schedule as &$k) {//有开始时间和结束时间
			$beginTime = strtotime($k['begin_time']);
			if($k['end_time']){
				$endTime = strtotime($k['end_time']);
				if($scheduleTime>$endTime)
					$k['state'] = 'p';
				else if($scheduleTime<$endTime&&$scheduleTime>$beginTime)
					$k['state'] = 'n';	
				else
					$k['state'] = 'f';	
			}
			else{//只有开始时间
				if($beginTime>$scheduleTime&&$isLastSchedulePass)
					$k['state'] = 'n';
				if($beginTime>$scheduleTime&&!$isLastSchedulePass)
					$k['state'] = 'f';
				if($beginTime<$scheduleTime)
					$k['state'] = 'p';
			}
				$isLastSchedulePass = ($k['state']=='p')?true:false;
			if($format){
				$k['begin_time'] = date('H:i', strtotime($k['begin_time']));
				if($k['end_time'])
					$k['end_time'] = date('H:i', strtotime($k['end_time']));
			}			
		}
		return $schedule;
	}

	public function getLeaderSchedule($timeStr, $format=false, $all=false){
		$user = D('User');
		$leaders = $user->getLeaders($all);
		$data = array();
		$i = 1;
		foreach ($leaders as $k) {
			$schedule = $this->getSchedule($k['id'], $timeStr, $format);
			if($schedule){
				$data[$k['username']]['no'] = $i++;
				$data[$k['username']]['fullname'] = $k['first_name'].$k['last_name'];
				$data[$k['username']]['data'] = $schedule;
			}
			
		}
		return $data;

	}
	
}