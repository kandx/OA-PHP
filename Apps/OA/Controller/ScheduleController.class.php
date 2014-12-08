<?php
namespace OA\Controller;
use Think\Controller;
class ScheduleController extends Controller {

    public function calendar(){
        $this->display();
    }

    public function getEvents(){
        //$id = I('id');
        $sch = D('Schedule');
        $user = M('User');
        $ids = $user->field('id')->select();
        foreach ($ids as $id) {
            $people[] = $id['id'];
        }
        $schedules = $sch->getSchedulesForPeople($people, 'all');
        foreach ($schedules as $sch) {
            $data[] = array(
                'id'=>$sch['id'],
                'title'=>$sch['title'],
                'start'=>$sch['start'],
                'end' => $sch['end'],
                'allDay'=>($sch['allDay']=='0')?false:true,
                'color'=>$sch['color']
                );
        }
        $this->ajaxReturn($data);
    }

    public function add(){
        if(IS_AJAX){
            // $data['title'] = I('title');
            // $data['begin_time'] = I('begin_time');
            // $data['end_time'] = I('end_time');
            // $data['is_allday'] = I('is_allday');
            // $data['user_id'] = I('user_id');
            //$data['color'] = I('color');
            $sch = M('Schedule');
            if($sch->create()){
                $sch->add();
                $this->ajaxReturn(1);
            }
            else
                $this->ajaxReturn($sch->getError());
        }
        //p($_POST);
    }


    public function test(){
        $sch = D('Schedule');
        $user = M('User');
        $ids = $user->field('id')->select();
        foreach ($ids as $id) {
            $people[] = $id;
        }
        $schedules = $sch->getSchedulesForPeople($people, 'all');
        p($people);
        p($schedules);
    }
}