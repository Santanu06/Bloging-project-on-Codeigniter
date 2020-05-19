<?php 
  class Ajaxmodel extends CI_model
  {
    public function fetch_country()
    {
      $this->db->select('*');
      $q=$this->db->get('country');
      return $q->result();
    }
    public function fetch_state($country_id)
    {
      $this->db->where('country_id',$country_id);
      $this->db->order_by('state_name','ASC');
      $q=$this->db->get('state');
      $output='<option value="">Select State</option>';
      foreach($q->result() as $state)
      {
        $output .='<option value="'.$state->state_id.'">'.$state->state_name.'</option>';
      }
      return $output;
    }
    public function fetch_city($state_id)
    {
      $this->db->where('state_id',$state_id);
      $this->db->order_by('city_name','ASC');
      $q=$this->db->get('city');
      $output='<option value="">Select City</option>';
      foreach($q->result() as $city)
      {
        $output .='<option value="'.$city->city_id.'">'.$city->city_name.'</option>';
      }
      return $output;
    }
  }

?>