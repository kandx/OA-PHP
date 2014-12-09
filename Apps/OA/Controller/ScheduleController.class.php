<?php
namespace OA\Controller;
use Think\Controller;
class ScheduleController extends Controller {

    public function leaderCalendar(){
        $user = D('User');
        $leaders = $user->getLeaders(true);//获取处级以上领导
        $this->assign('leaders', $leaders);
        $this->display();
    }

    public function personalCalendar(){
        $this->display();
    }

    public function getEvents(){
        if(IS_AJAX){
            $id = I('id');
            $sch = D('Schedule');
            if(!empty($id)){
                $schedules = $sch->getSchedules($id);
            }
            else{
                
                $user = D('User');
                $ids = $user->getLeaderIds(true);
                $schedules = $sch->getSchedulesForPeople($ids, 'all');
            }
            
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
        else
            $this->error('请先登录再操作', U("Index/index"));
        
    }

    public function add(){
        if(IS_AJAX){
            $sch = M('Schedule');

            if($sch->create()){
                $sch->add();
                $this->ajaxReturn(1);
            }
            else
                $this->ajaxReturn($sch->getError());
        }
        else
            $this->error('请先登录再操作', U('Index/index'));
        // p($_POST);
    }

    public function del(){
        if(IS_AJAX){
            $id = I('id');
            $sch = M('Schedule');
            if(empty($id))
                $msg = '日程ID错误，请确认点击了正确的日程！';
            else{
                if($sch->delete($id))
                    $msg = 1;
                else
                    $msg = $sch->getError();
            }
            $this->ajaxReturn($msg);
        }
    }
    public function edit(){
        if(IS_AJAX){
            $sch = M('Schedule');
            if($sch->create()){
                if($sch->save())
                    $this->ajaxReturn(1);
                else
                    $this->ajaxReturn($sch->getError());
            }
            else
                $this->ajaxReturn($sch->getError());
        }
    }
    public function getDescription(){
        if(IS_AJAX){
            $id = I('id');
            $sch = M('Schedule');
            $description = $sch->where(array('id'=>$id))->getField('description');
            $this->ajaxReturn($description);
        }
    }

    public function drop(){
        if(IS_AJAX){
            $id = I('id');
            $sch = M('Schedule');
            $event = $sch->find($id);
            if($event){
                $event['begin_time'] = I('start');
                $event['end_time'] = I('end');
                $event['is_allday'] = (I('allDay')=="true")?1:0;
                if($sch->save($event))
                    $this->ajaxReturn(1);
                else
                    $this->ajaxReturn($sch->getError());
            }
            else
                $this->ajaxReturn('错误的日程ID');
        }
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