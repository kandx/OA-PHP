<?php
namespace OA\Model;
use Think\Model;

/**
* 用户定义类
*/
class RoomBookingModel extends Model
{

	private function getContent($type, $id){
		if($type=='M'){
			$mt = M('Meeting');
			$meeting = $mt->find($id);
			if($meeting){
				if($meeting['host'])
					return getMemberName(intval($meeting['host'])).'主持召开'.$meeting['content'];
				else
					return $meeting['content'];
			}
		}
		else if($type=='R'){
			$rp = D('Reception');
			$reception = $rp->getReception($id);
			if($reception)
				return $reception['vistor'].'&nbsp;&nbsp;&nbsp;'."<strong class='text-warning'>".getDepartmentName($reception['major_department']).'接待'."</strong>";
		}
		else
			return null;
	}	

	//获取指定房间，指定日期的预定情况
	public function getRoomSchedule($roomId, $date){
		if($date){
			$start = $date.' '.TIME_START;
			$end = $date.' '.TIME_END;
			$where['room_id'] = $roomId;
			$where['begin_time'] = array('egt', $start);
			$where['end_time'] = array('elt', $end);
			$roomSchedule = $this->where($where)->order('begin_time')->select();
			if($roomSchedule){
				$formatSchedule = array();
				foreach ($roomSchedule as $item) {
					$content = $this->getContent($item['event_type'], $item['event_id']);
					$formatSchedule[] = array(
						'start' => $item['begin_time'],
						'end' => $item['end_time'],
						'content' => $content
						);
				}
				return $formatSchedule;
			}
			else
				return null;

		}
	}

	//根据事件ID获取房间预定情况
	public function getRoomBookedInfo($event_id, $event_type){
		$where['a.event_type'] = $event_type;
		$where['a.event_id'] = $event_id;
		return $this->table('oa_room_booking a')
					->join('oa_room b on b.id = a.room_id', 'LEFT')
					->where($where)
					->field('b.name, a.begin_time, a.end_time')
					->select();
	}
	
}