<?php
namespace OA\Model;
use Think\Model;

/**
* 用户定义类
*/
class ScheduleModel extends Model
{		
	TIME_START = '00:00';
	TIME_END = '23:59';

	public function getSchedule($id, $dateStr, $format=fasle){
		$start_time = $dateStr.' '.TIME_START;
		$end_time = $dateStr.' '.TIME_END;
		$where['user_id'] = $id;
		$where['begin_time'] = array('between', array($start_time, $end_time));
		$schedule = $this->where($where)->select();
		if($format){
			foreach ($schedule as &$k) {
				$k['begin_time'] = date('H:i', strtotime($k['begin_time']));
				if($k['end_time'])
					$k['end_time'] date('H:i', strtotime($k['end_time']));
				
			}
		}
		return $schedule;
	}

	public function 
	
}