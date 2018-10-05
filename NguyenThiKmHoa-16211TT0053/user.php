<?php
include('data.php');

class user extends data {
	public function getUser(){
		$sql = 'SELECT * FROM user';
		$user = $this->select($sql);
		return $user;
	}

	public function delete($params){
		
		$this->query($sql);
	}

	public function insert($params){
		
		$this->query($sql);
	}

	public function update($params){
		
		$this->query($sql);
	}
	
}

?>