<?php 
  class Login extends MY_Controller
  {
    public function __construct()
    {
      parent :: __construct();
      if($this->session->userdata('user_id')){
        return redirect('Admin/dashboard');
      }
      $this->load->model('Mymodel');
    }
    public function userlogin()
    {
      if($this->form_validation->run('userlogin_validation'))
      {
       $email_id=$this->input->post('email_id');
       $password=$this->input->post('password');
       $user_id=$this->Mymodel->user_login($email_id,$password);
        if($user_id)
        {
          $this->session->set_userdata('user_id',$user_id);
          return redirect('Admin/dashboard');
        }else{
          $this->session->set_flashdata('em','Invalid Email Id or Password');
          $this->load->view('admin/userlogin');
        }
      }else{
        $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
        $this->load->view('admin/userlogin');
      }
    }
    public function register()
    {
      $this->load->view('admin/registration');
    }
    
    public function registration()
    {
      if($this->form_validation->run('reg_validation'))
      {
        $reg=$this->input->post();
        if($this->Mymodel->registration($reg))
        {
          $email_id=$reg['email_id'];
          $this->load->library('email');
          $config=[
                  'protocol'=>'smtp',
                  'smtp_host'=>'ssl://smtp.googlemail.com',
                  'smtp_port'=>465,
                  'smtp_user'=>'santanukumarsahu876@gmail.com',
                  'smtp_pass'=>'sanjukta9786@',
                  'mailtype'=>'text',
                  'charset'=>'utf-8'                  
          ];
          $this->email->initialize($config);
          $this->email->from('santanukumarsahu876@gmail.com', 'Santanu');
          $this->email->to($email_id); 
  
          $this->email->subject('Registration Completed');
          $this->email->message('Congratulations !! Your registration for Cubiclespace Completed Successfully.');  
  
          $this->email->send();
          $this->session->set_flashdata('sm','Successfully Registered');
        }else{
          $this->session->set_flashdata('em','Failed to Register');
        }
        return redirect('Login/register');
      }else{
        
        $this->form_validation->set_error_delimiters('<div class="text-danger font-italic mt-5">','</div>');
        $this->load->view('admin/registration');
      }
    }
 

  }
?>