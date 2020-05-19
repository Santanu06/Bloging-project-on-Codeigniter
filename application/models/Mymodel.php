<?php 
  class Mymodel extends CI_model
  {
    public function registration($reg)
    {
     return $this->db->insert('user',$reg);
    }
    public function user_login($email_id,$password)
    {
     $q=$this->db->where(['email_id'=>$email_id,'password'=>$password])
                ->get('user');
                if($q->num_rows())
                {
                  return $q->row('user_id');
                }else{
                  return false ;
                }
    }
    public function addarticle($article_data)
    {
      return $this->db->insert('article',$article_data);
    }

    public function viewarticle($limit,$offset)
    {
      $user_id=$this->session->userdata('user_id');
      $q=$this->db->select('*')
              ->where('user_id',$user_id)
              ->limit($limit,$offset)
              ->get('article');
              return $q->result();
    }

    public function total_rows()
    {
      $user_id=$this->session->userdata('user_id');
      $q=$this->db->select('*')
              ->where(['user_id'=>$user_id])
              ->get('article');
            return $q->num_rows();
    }

    public function delete_article($article_id)
    {
      return $this->db->where('article_id',$article_id)
                      ->delete('article');

    }

    public function editarticle($article_id)
    {
     $q=$this->db->select('*')
               ->where(['article_id'=>$article_id])
               ->get('article');
               return $q->row();

    }
    
    public function updatearticle($article_id,$updatae_data)
    {
     return $this->db->where(['article_id'=>$article_id])
              ->update('article',$updatae_data);
    }

    public function view_article($limit,$offset)
    {
      $q=$this->db->select('*')
                  ->limit($limit,$offset)
                  ->get('article');
            return $q->result();  
    }

    public function total_row()
    {
      $q=$this->db->select('*')
                ->get('article');
            return $q->num_rows();
    }

    public function search_article($search)
    {
     $q=$this->db->from('article')
                ->like('article_title',$search)
                ->get();
                return $q->result();
    }

    public function total_row_search($search)
    {
     $q=$this->db->from('article')
                  ->like('article_title',$search)
                  ->get();
                  return $q->num_rows();
    }

    public function searcharticle($search_data,$limit,$offset)
    {
     $q=$this->db->from('article')
                ->like('article_title',$search_data)
                ->limit($limit,$offset)
                ->get();
                return $q->result();
    }
    public function view_page($article_id)
    {
     $q=$this->db->select('*')
                ->where('article_id',$article_id)
                ->get('article');
                return $q->result();
    }
    
  }

?>