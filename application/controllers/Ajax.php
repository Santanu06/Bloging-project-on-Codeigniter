<?php 
  class Ajax extends MY_Controller
  {
    public function __construct()
    {
      parent::__construct();
      $this->load->model('Ajaxmodel');
    }
    public function index()
    {
     $country=$this->Ajaxmodel->fetch_country();
     $this->load->view('admin/ajax',compact('country'));
    }
    public function fetch_state()
    {
      if($this->input->post('country_id'))
      {
        echo $this->Ajaxmodel->fetch_state($this->input->post('country_id'));
      } 
    }
    public function fetch_city()
    {
      if($this->input->post('state_id'))
      {
         echo $this->Ajaxmodel->fetch_city($this->input->post('state_id'));
      }
    }
  }
?>