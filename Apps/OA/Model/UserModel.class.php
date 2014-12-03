<?php
namespace OA\Model;
use Think\Model;

/**
* 用户定义类
*/
class UserModel extends Model
{		
	protected $_validate = array(
		array('username', 'required', '用户名不能为空！'),
		array('password', 'required', '密码不能为空！'),
		array('first_name', 'required', '姓不能为空！'),
		array('last_name', 'required', '名字不能为空！'),
		array('birthday', 'required', '生日不能为空！')
		);

	protected $_auto = array(
		array('update_time', 'time', 2, 'function'), //更新时写入当前时间戳
		array('password', 'md5', 3, 'callback'),
		);

	public function getFullName($id){
		$user = $this->where(array('id'=>$id))->field('first_name, last_name')->find();
		if($user){
			if(length($user['last_name']==1))
				return $user['first_name'].' '.$user['last_name'];
			else
				return $user['first_name'].$user['last_name'];
		}
		else
			return '';
	}

	public function getHolidays($id){
		$begin_work_date = $this->where(array('id'=>$id))->getField('begin_work_date');
		if($begin_work_date){
			$bwd = new \Org\Util\Date($begin_work_date);
			$years = $bwd.dateDiff(date('Y-m-d'), "y");
			if($years<10)
				return 5;
			else if($years>=10&&$years<15)
				return 10;
			else
				return 15;
		}
		else
			return -1;
	}

	public function login($username, $password){
		if($username&&$password){
			$where['username'] = $username;
			$where['password'] = md5($password);
			$user = $this->where($where)->find();
			if($user){
				session('uid',$user['id']);
				session('fullname', $user['first_name'].$user['last_name']);
				session('headImg', $user['image_url']);

				$user['is_login'] = true;
				$user['last_login'] = date('Y-m-d H:i:s');
				$user->save();

				return true;
			}
			else
				return false;
		}
		else
			return false;
	}

	public function logout($id){
		$user = $this->find($id);
		$user['is_login'] = false;
		if($user->save())
			return true;
		else
			return false;
	}
	
}