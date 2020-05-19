<?php 
  class User extends MY_Controller
  {
    public function __construct()
    {
      parent :: __construct();
      $this->load->model('Mymodel');
    }
    public function index()
    {
      $this->load->library('pagination');
      $config=[
              'base_url'=> base_url('User/index'),
              'per_page'=> 4,
              'total_rows'=> $this->Mymodel->total_row(),
              'first_link' => false,
              'last_link' => false,
              'full_tag_open'=>'<ul class="pagination ">', 
              'full_tag_close'=>'</ul>',
              'attributes'=> ['class'=>'page-link'],
              'prev_link'=>'&laquo',
              'prev_tag_open'=>'<li class="page-item">',
              'prev_tag_close'=>'</li>',
              'next_link'=>'&raquo',
              'next_tag_open'=>'<li class="page-item">',
              'next_tag_close'=>'</li>',
              'num_tag_open'=>'<li class="page-item">',
              'num_tag_close'=>'</li>',
              'cur_tag_open'=>'<li class="page-item active"><a class="page-link">',
              'cur_tag_close'=>'</a></li>'
      ];
      $this->pagination->initialize($config);
      $view_article=$this->Mymodel->view_article($config['per_page'],$this->uri->segment(3));
      $this->load->view('user/homepage',compact('view_article'));
    }

    public function search()
    {
      $this->form_validation->set_rules('search','Search','trim|required');
      if($this->form_validation->run())
      {
        $search=$this->input->post('search');
        return redirect("User/search_article/$search");
      }else{
        $this->form_validation->set_error_delimiters('<div class="text-danger mx-2">','</div>');
        $this->index();
      }
    }

    public function search_article($search)
    {
        $config=[
          'base_url'=>base_url("User/search_article/$search"),
          'per_page'=>3,
          'total_rows'=>$this->Mymodel->total_row_search($search),
          'first_link' => false,
          'last_link' => false,
          'full_tag_open'=>'<ul class="pagination ">', 
          'full_tag_close'=>'</ul>',
          'attributes'=> ['class'=>'page-link'],
          'prev_link'=>'&laquo',
          'prev_tag_open'=>'<li class="page-item">',
          'prev_tag_close'=>'</li>',
          'next_link'=>'&raquo',
          'next_tag_open'=>'<li class="page-item">',
          'next_tag_close'=>'</li>',
          'num_tag_open'=>'<li class="page-item">',
          'num_tag_close'=>'</li>',
          'cur_tag_open'=>'<li class="page-item active"><a class="page-link">',
          'cur_tag_close'=>'</a></li>'
          ];
           $this->load->library('pagination',$config);
           $search_result=$this->Mymodel->search_article($search,$config['per_page'],$this->uri->segment(4));
          $this->load->view('user/searchpage',['search_result'=>$search_result]);
   }

   public function viewpage($article_id)
   {
     $view_page=$this->Mymodel->view_page($article_id);
     $this->load->view('user/viewarticle',compact('view_page'));
   }
  }
?>