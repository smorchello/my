<?php
class WebUser extends CWebUser {
	public function getRole() {
		$model = User::model ()->find ( array (
				'select' => 'role',
				'condition' => 'id=:id',
				'params' => array (
						':id' => 1
				) 
		) );
		if ($model != null)
			return $model->role;
	}
}
