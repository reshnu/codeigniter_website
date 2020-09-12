<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	function __construct() {
		parent::__construct();
	
		$this->controller = 'Welcome';
	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function admin_homepage(){
		if ($this->session->userdata('logged_in')) {

		$this->load->view('admin_view/admin_homepage');
		}
		else{ 
			redirect(base_url('index.php/Welcome/login'));
		}
		
	}
	public function user_homepage(){
		if ($this->session->userdata('logged_in')) {

		$id=$this->session->userdata('reg_id');
		//echo $id;exit();
	
		$this->load->model('welcome_model');
		$data['data1']=$this->welcome_model->checkapply($id);
		$this->load->view('user_view/user_homepage',$data);
		}
		else{ 
			redirect(base_url('index.php/Welcome/login'));
		}
	}
	public function admin_dashboard(){
		if ($this->session->userdata('logged_in')) {
		$this->load->model('welcome_model');
		$data['data']=$this->welcome_model->fetch_job();
		$this->load->view('admin_view/admin_dash',$data);
	}
	else{ 
		redirect(base_url('index.php/Welcome/login'));
	}
	}
	public function application($job_id){
		if ($this->session->userdata('logged_in')) {
		$this->load->model('welcome_model');
		$data['applied']=$this->welcome_model->applied($job_id);
		$this->load->view('admin_view/admin_application',$data);
		}
		else{ 
			redirect(base_url('index.php/Welcome/login'));
		}
	}
	public function login(){
		$this->load->view('login');
	}
	public function insert_data(){
		if ($this->session->userdata('logged_in')) {
		$this->load->library('form_validation');
		$this->form_validation->set_rules("email","Email","required|valid_email|is_unique[registration.email]");
		$this->form_validation->set_rules("dob","Date of birth","required");
		$this->form_validation->set_rules("contact_number","Contact Number","required|min_length[10]|max_length[10]");
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[12]|trim|alpha_numeric');
		if($this->form_validation->run()){
			
			$this->load->model('welcome_model');
			
			$data=array(

				"email"=>$this->input->post("email"),
				"dob"=>$this->input->post("dob"),
				"contact_number"=>$this->input->post("contact_number"),
				'password'=>sha1($this->input->post("password")),
				'utype'=>'2'

			);
			$this->welcome_model->insert_data($data);
			$this->load->view('success_login');
		

		
		}else{
			$this->load->view('welcome_message');
		}
	}
	else{ 
		redirect(base_url('index.php/Welcome/login'));
	}
	}

	public function message(){

		$this->load->library('form_validation');
		$this->form_validation->set_rules("first_name","First Name","required");
		$this->form_validation->set_rules("last_name","Last Name","required");
		$this->form_validation->set_rules("subject","Subject","required");
		$this->form_validation->set_rules("email","Email","trim|required");
		$this->form_validation->set_rules("message","Message","required");
		if($this->form_validation->run()){

			$id=$this->session->userdata('id');
			$data=array(
				"first_name"=>$this->input->post("first_name"),
				"last_name"=>$this->input->post("last_name"),
				"subject"=>$this->input->post("subject"),
				"email"=>$this->input->post("email"),
				"message"=>$this->input->post("message")
			);
			$this->load->model("welcome_model");
			$this->welcome_model->message($data);
			redirect(base_url("index.php/welcome"));
		}
		else{
			$this->session->set_flashdata('message', 'Something Happend');
			redirect(base_url('index.php/welcome#contact-section'));
		}
	}
	public function add_job(){

		if ($this->session->userdata('logged_in')) {
		$this->load->library('form_validation');
		$this->form_validation->set_rules("title","Job Title","required|max_length[50]");
		$this->form_validation->set_rules("checkbox1","","");
		$this->form_validation->set_rules("checkbox2","","");
		$this->form_validation->set_rules("role","Role","required");
		$this->form_validation->set_rules("dist","District","required");
		$this->form_validation->set_rules("minsal","Minimum Salary","required|numeric");
		$this->form_validation->set_rules("maxsal","Maximum Salary","required|numeric");
		$this->form_validation->set_rules("minexp","Minimum Experience","required|numeric");
		$this->form_validation->set_rules("maxexp","Maximum Experience|numeric");
		
		if($this->form_validation->run()){

			$data=array(
				"title"=>$this->input->post("title"),
				"checkbox1"=>$this->input->post("checkbox1"),
				"checkbox2"=>$this->input->post("checkbox2"),
				"role"=>$this->input->post("role"),
				"dist"=>$this->input->post("dist"),
				"minsal"=>$this->input->post("minsal"),
				"maxsal"=>$this->input->post("maxsal"),
				"minexp"=>$this->input->post("minexp"),
				"maxexp"=>$this->input->post("maxexp"),
				"jobdesc"=>$this->input->post("jobdesc"),

			);
			$this->session->set_flashdata('success', 'SucessFully Added');
			$this->load->model("welcome_model");
			$this->welcome_model->add_job($data);
			redirect(base_url('index.php/Welcome/admin_homepage'));
		}else{
			$this->session->set_flashdata('add_job','Something Went Wrong');
			$this->load->view('admin_view/admin_homepage');
		}
	}
		else{ 
			redirect(base_url('index.php/Welcome/login'));
		}

	}
	public function login_insert(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');
		$this->form_validation->set_error_delimiters('<div class ="text-danger">', '</div>');
		if ($this->form_validation->run()) {
			$email=$this->input->post('email');
			$password=sha1($this->input->post('password'));
			$this->load->model('welcome_model');
			$validate=$this->welcome_model->can_login($email,$password);
			if($validate->num_rows()>0){
				$data=$validate->row_array();
				$email=$data['email'];
				$utype=$data['utype'];
				$reg_id=$data['reg_id'];
				$session_data=array(

					'reg_id'=>$reg_id,
					'email'=>$email,
					'utype'=>$utype,
					'logged_in'=>true
				);

				$this->session->set_userdata($session_data);
				if($utype=='1'){
				
					redirect(base_url('index.php/Welcome/home'));

				}
				elseif($utype=='2'){
					
					redirect(base_url('index.php/Welcome/user_homepage'));

				}
				else{
					$this->session->set_flashdata('error', 'invalid user name or password');
				redirect(base_url('index.php/Welcome/login'));
				}

			}
			else{
				$this->session->set_flashdata('error', 'invalid user name or password');
				redirect(base_url('index.php/Welcome/login'));
		         }
		}
		
	}
	public function edit_page($job_id){
		if ($this->session->userdata('logged_in')) {
		$this->load->model('welcome_model');
		$data['data']=$this->welcome_model->edit_job($job_id);
		$this->load->view('admin_view/edit_page',$data);
		}
		else{ 
			redirect(base_url('index.php/Welcome/login'));
		}

	}
	public function update_job(){
	
		
			
				$title=$this->input->post("title");
				$checkbox1=$this->input->post("checkbox1");
				$checkbox2=$this->input->post("checkbox2");
				$role=$this->input->post("role");
				$dist=$this->input->post("dist");
				$minsal=$this->input->post("minsal");
				$maxsal=$this->input->post("maxsal");
				$minexp=$this->input->post("minexp");
				$maxexp=$this->input->post("maxexp");
				$jobdesc=$this->input->post("jobdesc");
				$job_id=$this->input->post("job_id");

			
			$this->load->model("welcome_model");
			$this->welcome_model->update_job($title,$checkbox1,$checkbox2,$role,$dist,$minsal,$maxsal,$minexp,$maxexp,$job_id,$jobdesc);
			redirect(base_url('index.php/Welcome/admin_dashboard'));
		

	}
	public function apply(){

		$this->load->model('welcome_model');
		$reg_id=$this->session->userdata('reg_id');
		$job_id=$this->input->post('job_id');
	
		$data=array(

			'job_id'=>$job_id,
			'reg_id'=>$reg_id
		);
		$this->welcome_model->apply($data);
		redirect(base_url('index.php/Welcome/user_homepage'));
	}
	
	public function add($apply_id){
		$this->load->model('welcome_model');
		$this->welcome_model->add($apply_id);
		 $job_id=$this->session->userdata('job_id');
		 redirect(base_url('index.php/Welcome/application/'.$job_id));
		


	}
	public function remove($apply_id){
		$this->load->model('welcome_model');
		$this->welcome_model->remove($apply_id);
		$job_id=$this->session->userdata('job_id');
		redirect(base_url('index.php/Welcome/application/'.$job_id));
	}
	function logout()
	{

		$this->load->driver('cache'); # add
		$this->session->sess_destroy(); # Change
		$this->cache->clean();  # add
		redirect(base_url('index.php/Welcome/login')); # Your default controller name
		ob_clean(); # add

	}
	function user_dashboard(){
		if ($this->session->userdata('logged_in')) {
		$this->load->model('welcome_model');
		$id=$this->session->userdata('reg_id');
		$data['applied']=$this->welcome_model->user_apply_view($id);
		$this->load->view('user_view/user_dashboard',$data);
		}
		else{ 
			redirect(base_url('index.php/Welcome/login'));
		}
		
}
	function admin_messages(){
		if ($this->session->userdata('logged_in')) {
			
			$this->load->model('welcome_model');
			$data['data']=$this->welcome_model->admin_message_fetch();
			$this->load->view('admin_view/admin_messages',$data);
			}
	else{ 
		redirect(base_url('index.php/Welcome/login'));
	}
}

	function home(){
		if ($this->session->userdata('logged_in')) {
		$this->load->view('admin_view/home');
	}
else{ 
	redirect(base_url('index.php/Welcome/login'));
}
	}
	

	function search()
    {
		if ($this->session->userdata('logged_in')) {
		$this->load->model('welcome_model');
        $keyword    =   $this->input->post('keyword');
        $data['data']    =   $this->welcome_model->search($keyword);
		$this->load->view('user_view/user_search',$data);
		}
		else{ 
			redirect(base_url('index.php/Welcome/login'));
		}
	}
	function delete_job($job_id){

		$this->load->model('welcome_model');
		$this->welcome_model->delete_job($job_id);
		redirect(base_url('index.php/Welcome/admin_dashboard'));
	}

	function delete_message($msg_id){

		$this->load->model('welcome_model');
		$this->welcome_model->delete_message($msg_id);
		redirect(base_url('index.php/Welcome/admin_messages'));
	}

	
	
}
