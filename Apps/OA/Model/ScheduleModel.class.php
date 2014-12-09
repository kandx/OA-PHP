<?php
namespace OA\Model;
use Think\Model;

/**
* 用户定义类
*/
class ScheduleModel extends Model
{	

	// public function getScheduleFor($id, $timeStr){
	// 	$scheduleTime = strtotime($timeStr);
	// 	$start_time = date('Y-m-d',$scheduleTime).' '.TIME_START;
	// 	$end_time = date('Y-m-d',$scheduleTime).' '.TIME_END;
	// 	$where['user_id'] = $id;
	// 	$where['begin_time'] = array('between', array($start_time, $end_time));
	// 	return $this->where($where)
	// 				->field('id, title, begin_time, end_time, is_allday, user_id, recorder, color')
	// 				->order('begin_time asc')
	// 				->select();
	// }

	public function getSchedules($id, $type='all', $beginTimeStr=null, $endTimeStr=null){
		$where['a.user_id'] = $id;
		if('oneday'==$type){//获取指定日期当天的日程
			if(!$beginTimeStr)
				return null;
			else{
				$startTime = date('Y-m-d', strtotime($beginTimeStr)).' '.TIME_START;
				$endTime = date('Y-m-d', strtotime($beginTimeStr)).' '.TIME_END;
				$where['a.begin_time'] = array('between', array($startTime, $endTime));
			}
		}
		else if('after'==$type){//获取指定日期后的所有日程记录
			if(!$beginTimeStr)
				return null;
			else{
				$startTime = date('Y-m-d', strtotime($beginTimeStr)).' '.TIME_START;
				$where['a.begin_time'] = array('egt', $startTime);
				
			}
		}
		else if('between'==$type){//获取区间的日程信息
			if(!$beginTimeStr || !$endTimeStr)
				return null;
			else{
				$startTime = date('Y-m-d', strtotime($beginTimeStr)).' '.TIME_START;
				$endTime = $endTime = date('Y-m-d', strtotime($endTimeStr)).' '.TIME_END;
				$where['a.begin_time'] = array('between', array($startTime, $endTime));
			}
		}
		else if('before'==$type){//获取指定日期前的日程信息
			if(!$beginTimeStr)
				return null;
			else{
				$startTime = date('Y-m-d', strtotime($beginTimeStr)).' '.TIME_END;
				$where['a.begin_time'] = array('elt', $startTime);
				
			}
		}
		return $this->table('oa_schedule a')
					->join('oa_user b on a.user_id = b.id', 'LEFT')
					->where($where)
					->field('a.id, a.title, a.begin_time as start, a.end_time as end, 
						a.is_allday as allDay, b.calendar_color as color')
					->order('a.begin_time asc')
					->select(); 
	}

	public function getSchedulesForPeople($ids, $type, $beginTimeStr=null, $endTimeStr=null){
		if(!$ids)
			return null;
		$data = array();
		foreach ($ids as $id) {
			$schedule = $this->getSchedules($id, $type, $beginTimeStr, $endTimeStr);
			if($schedule)
				$data = array_merge($data, $schedule);
		}
		return $data;
	}
	
	public function getLeaderScheduleForMain($timeStr, $all=false){
		$user = D('User');
		$leaders = $user->getLeaders($all);
		$data = array();
		$i = 1;
		foreach ($leaders as $k) {
			$schedule = $this->getSchedules($k['id'], 'oneday', $timeStr);
			if($schedule){
				$data[$k['username']]['no'] = $i++;
				$data[$k['username']]['fullname'] = $k['first_name'].$k['last_name'];
				$data[$k['username']]['data'] = $schedule;
			}
			
		}
		return $data;
	}
	
}