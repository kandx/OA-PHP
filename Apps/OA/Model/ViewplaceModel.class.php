<?php
namespace OA\Model;
use Think\Model;

/**
* 用户定义类
*/
class ViewplaceModel extends Model
{		
	public function linkPlaces($ids){
		$places = "";
		if(strpos($ids, ",")){
			$ids = explode(",", $ids);
			foreach ($ids as $id) {
				$place = $this->where(array('id'=>$id))->getField('name');
				if(!$places)
					$places = $place;
				else
					$places .= "、".$place; 
			}
			return $places;
		}
		else
			return $this->where('id=$ids')->getField('name');
	}
	
}