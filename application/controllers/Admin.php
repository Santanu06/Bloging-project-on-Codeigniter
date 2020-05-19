<?php 
  class Admin extends MY_Controller
  {
    public function __construct()
    {
      parent :: __construct();
      if( ! $this->session->userdata('user_id')){
        return redirect('Login/userlogin');
      }
      $this->load->model('Mymodel');
    }
    
    public function dashboard()
    {
      
      $config=[
              'base_url'=>base_url('Admin/dashboard'),
              'per_page'=> 4,
              'total_rows'=>$this->Mymodel->total_rows(),
              'first_link'=> false,
              'last_link'=>false,
              'full_tag_open'=>'<ul class="pagination">',
              'full_tag_close'=>'</ul>',
              'attributes' => ['class' => 'page-link'],
              'prev_link'=>'&laquo',
              'prev_tag_open'=>'<li class="page-item">',
              'prev_tag_close'=>'</li>',
              'next_link'=>'&raquo',
              'next_tag_open'=>'<li class="page-item">',
              'next_tag_close'=>'</li>',
              'num_tag_open'=>'<li class="page-item">',
              'num_tag_close'=>'</li>',
              'cur_tag_open'=>'<li class="page-item active"></li><a class="page-link">',
              'cur_tag_close'=>'</a></li>'
             ];
    $this->load->library('pagination',$config);
    $user_id=$this->session->userdata('user_id');
    $view_article=$this->Mymodel->viewarticle($config['per_page'],$this->uri->segment(3));
    $this->load->view('admin/dashboard',compact('view_article'));
    }

    public function add_article()
    {
      $config=[
        'upload_path'=>'./upload/',  
        'allowed_types'=>'gif|jpg|png',
        ];
      $this->load->library('upload',$config);
      if($this->form_validation->run('article_validation') && $this->upload->do_upload('article_image'))
      {
        $article_data=$this->input->post();
        $upload_data=$this->upload->data();
        $image_patha=('upload/'.$upload_data['file_name']);
        $article_data['article_image']=$image_patha;
        if($this->Mymodel->addarticle($article_data))
        {
          $this->session->set_flashdata('sm','Successfully Added Article');
          return redirect('Admin/dashboard');
        }else{
          $this->session->set_flashdata('em','Failed to Add Article Please try Again');
          return redirect('admin/addarticle');
        }
     }else{
       $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
       $upload_error=array('upload_error'=>$this->upload->display_errors());
       $this->load->view('admin/addarticle',$upload_error);
     }
    }

    public function logout()
    {
      $this->session->unset_userdata('user_id');
      $this->load->view('admin/userlogin');
    }

    public function deletearticle($article_id)
    {
     if($this->Mymodel->delete_article($article_id)) {
       $this->session->Set_flashdata('sm','Article successfully Deleted');
     }else{
       $this->session->set_flashdata('em','Article Failed to Delete');
     }
     return redirect('Admin/dashboard');
    }

    public function edit_article($article_id)
    {
      $fetch_article=$this->Mymodel->editarticle($article_id);
      $this->load->view('admin/editarticle',['articledata'=>$fetch_article]);
    }

    public function update_article($article_id)
    {
     
      if($this->form_validation->run('article_validation'))
      {
        $updatae_data=$this->input->post();
        if($this->Mymodel->updatearticle($article_id,$updatae_data))
        {
          $this->session->set_flashdata('sm','Article Edited Successfully');
        }else{
          $this->session->set_flashdata('em','Failed to Edit Article');
        }
        return redirect('Admin/dashboard');
      }else{
        $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
        
        $this->edit_article($article_id);
      }
      
    }
  }
?>