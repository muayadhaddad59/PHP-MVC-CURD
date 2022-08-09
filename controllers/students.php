<?php
class students extends Controller{
	protected function index(){
		$viewmodel = new ShareModel();
		$this->returnView($viewmodel->Index(), true);
	}
	protected function add(){
		if(!isset($_SESSION['is_logged_in'])){
			header('Location: '.ROOT_URL.'students');
		}
		$viewmodel = new ShareModel();
		$this->returnView($viewmodel->add(), true);
	}


	protected function delete(){

		$viewmodel = new ShareModel();
		$this->returnView($viewmodel->delete(), true);
	}
	protected function update(){
		
		$viewmodel = new ShareModel();
		$this->returnView($viewmodel->update(), true);
	}

}