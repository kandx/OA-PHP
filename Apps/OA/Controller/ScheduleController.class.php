<?php
namespace OA\Controller;
use Think\Controller;
class ScheduleController extends Controller {

    public function calendar(){
        $this->display();
    }

    public function getEvents(){
        $id = I('id');
        $sch = D('Schedule');
        $schedules = $sch->getSchedulesBetween($id, '2014-12-1', date('Y-m-d'));
        foreach ($schedules as $sch) {
            $data[] = array(
                'id'=>$sch['id'],
                'title'=>$sch['title'],
                'start'=>$sch['begin_time'],
                'end' => $sch['end_time'],
                'allDay'=>($sch['is_allday']=='0')?false:true,
                'color'=>$sch['color']
                );
        }
        $this->ajaxReturn($data);
    }

    public function add(){
        if(IS_AJAX){
            $data['title'] = I('title');
            $data['begin_time'] = I('begin_time');
            $data['end_time'] = I('end_time');
            $data['is_allday'] = I('is_allday');
            $data['user_id'] = I('user_id');
            $data['color'] = I('color');
            $sch = M('Schedule');
            if($sch->create($data)){
                $sch->add($data);
                $this->ajaxReturn(1);
            }
            else
                $this->ajaxReturn($sch->getError());
        }
    }


    public function test(){
        $schedule = D('Schedule');
        $schedules = $schedule->getSchedulesBetween(1, '2014-12-1', date('Y-m-d'));
        dump($schedules);
    }
}