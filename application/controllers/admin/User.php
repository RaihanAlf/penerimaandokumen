<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
        $this->load->model('User_model');
		if($this->session->userdata('logged') !=TRUE){
            $url=base_url('auth');
            redirect($url);
		};
		
	}

    public function index()
	{
        $data=array(
            'data' => $this->User_model->user()
            );
            $this->load->view('admin/user_list',$data);
	}

	function tambah_user(){
        $user_name=$this->input->post('user_name');
        $user_email=$this->input->post('user_email');
        $user_password=$this->input->post('user_password');
        $user_level=$this->input->post('user_level');
        $user_status=$this->input->post('user_status');
        $saved = $this->User_model->tambah_user($user_name,$user_email,$user_password,$user_level,$user_status);
        
        if ($saved){
            $this->session->set_flashdata('message', 'User was Created');
            redirect('admin/user');
        }
    }

	function edit_user(){
        $user_id = $this->input->post('user_id');
		$user_name=$this->input->post('user_name');
        $user_email=$this->input->post('user_email');
        $user_password=$this->input->post('user_password');
        $user_level=$this->input->post('user_level');
        $user_status=$this->input->post('user_status');
        $edited = $this->User_model->edit_user($user_id,$user_name,$user_email,$user_password,$user_level,$user_status);
        
        if($edited){
            $this->session->set_flashdata('message', 'Data Berhasil Diedit');
            redirect('admin/user');
        }
    }
	
    public function register()
	{
		$this->form_validation->set_rules('name', 'Name', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]');
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|matches[password2]');
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

		if($this->form_validation->run() == FALSE) {
			$this->load->view('regisration.php');
		}else{
			$data = [
				'name' => $this->input->post('name'),
				'email' => $this->input->post('email'),
				'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
				'role_id' => $this->input->post('role_id'),
				'is_active' => 1,
				'date_created' => time()
			];
			$saved = $this->db->insert('user', $data);
            if($saved){
                $this->session->set_flashdata('message', 'User was Created');
                redirect('admin/user');
            }
		}
	}
    public function delete($id = null)
	{
		if (!$id) {
			show_404();
		}

		$deleted = $this->User_model->delete($id);
		if ($deleted) {
			$this->session->set_flashdata('message', 'User was deleted');
			redirect('admin/user');
		}
	}
}