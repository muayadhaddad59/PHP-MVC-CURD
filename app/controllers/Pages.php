<?php
  class Pages extends Controller {
    public function __construct(){
     
    }
    
    public function index(){
      if(isLoggedIn()){
        redirect('students');
      }
      $data = [
        'title' => 'Welcome to our School',
        'description' => 'Haddad School',

      ];
     
      $this->view('pages/index', $data);
    }

   
  }