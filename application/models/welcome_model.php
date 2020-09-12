<?php 
class welcome_model extends CI_MODEL{
    public function insert_data($data){

$this->db->insert('registration',$data);
    }

    function message($data){
        $this->db->insert('message',$data);
    }
    function add_job($data){

        $this->db->insert('add_job',$data);
    }
    function can_login($email,$password){
		$this->db->where('email',$email);
		$this->db->where('password',$password);
		$query=$this->db->get('registration');
		return $query;
}
function fetch_job(){
     $this->db->select('*');
     $this->db->from('add_job');
     return $this->db->get('');
}
function checkapply($id){
   $this->db->select('*');
   $this->db->where('reg_id',$id);
   $this->db->join('add_job','add_job.job_id=apply.job_id');
   return $this->db->get('apply');

}
function edit_job($job_id){
    $this->db->where('job_id',$job_id);
    return $this->db->get('add_job');
}

function update_job($title,$checkbox1,$checkbox2,$role,$dist,$minsal,$maxsal,$minexp,$maxexp,$job_id,$jobdesc){

    $this->db->set('title',$title);
    $this->db->set('checkbox1',$checkbox1);
    $this->db->set('checkbox2',$checkbox2);
    $this->db->set('role',$role);
    $this->db->set('dist',$dist);
    $this->db->set('minsal',$minsal);
    $this->db->set('maxsal',$maxsal);
    $this->db->set('minexp',$minexp);
    $this->db->set('maxexp',$maxexp);
    $this->db->set('jobdesc',$jobdesc);
    $this->db->where('job_id',$job_id);
    $this->db->update('add_job');


    
		
	

}
public function apply($data){

    $this->db->insert('apply',$data);
}
public function applied($job_id){
   $this->db->select('*');
   $this->db->from('apply');
   $this->db->where('apply.job_id',$job_id);
   $this->db->join('registration','registration.reg_id=apply.reg_id');
   $this->db->join('add_job','add_job.job_id=apply.job_id');
   return $this->db->get('');
}
public function add($id){
    $this->db->set('status','added');
    $this->db->where('apply_id',$id);
    $this->db->update('apply');
}

public function remove($apply_id){

    $this->db->where('apply_id',$apply_id);
    $this->db->delete('apply');
}
public function user_apply_view($id){
    $this->db->select('*');
    $this->db->from('apply');
    $this->db->where('reg_id',$id);
    $this->db->join('add_job','add_job.job_id=apply.job_id');
   return $this->db->get('');
}

function search($keyword)
    {
        $this->db->like('title',$keyword);
        return  $this->db->get('add_job');
        
    }

    function delete_job($job_id){

        $this->db->where('job_id',$job_id);
        $this->db->delete('add_job');
    }

    function admin_message_fetch(){

        return $this->db->get('message');
    }
    function delete_message($msg_id){
        $this->db->where('msg_id',$msg_id);
        $this->db->delete('message');

    }


}