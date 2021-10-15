<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    function __construct(){
        parent::__construct();
		$this->load->model('Mlogin','Mlogin');
    }
    
	function index(){
        $data['meta'] = [
			'title' => 'Login',
		];

		$this->load->view('login', $data);
	}
    
    function autentikasi(){
        $email = $this->input->post('email');
        $password = $this->input->post('pass');
                
        $validasi_email = $this->Mlogin->query_validasi_email($email);
        if($validasi_email->num_rows() > 0){
            $validate_ps=$this->Mlogin->query_validasi_password($email,$password);
            if($validate_ps->num_rows() > 0){
                $x = $validate_ps->row_array();
                if($x['user_status']=='1'){
                    $this->session->set_userdata('logged',TRUE);
                    $this->session->set_userdata('user',$email);
                    $id=$x['user_id'];
                    if($x['user_level']=='master'){ 
                        $name = $x['user_name'];
                        $this->session->set_userdata('access','Master');
                        $this->session->set_userdata('id',$id);
                        $this->session->set_userdata('name',$name);
                        redirect('master/dashboard');

                    }else if($x['user_level']=='admin'){
                        $name = $x['user_name'];
                        $this->session->set_userdata('access','Admin');
                        $this->session->set_userdata('id',$id);
                        $this->session->set_userdata('name',$name);
                        redirect('admin/dashboard');

                    }else if($x['user_level']=='security'){ 
                        $name = $x['user_name'];
                        $this->session->set_userdata('access','Security');
                        $this->session->set_userdata('id',$id);
                        $this->session->set_userdata('name',$name);
                        redirect('security');

                    }else if($x['user_level']=='receipt'){
                        $name = $x['user_name'];
                        $this->session->set_userdata('access','Receipt');
                        $this->session->set_userdata('id',$id);
                        $this->session->set_userdata('name',$name);
                        redirect('receipt');
                        
                    }else if($x['user_level']=='book'){
                        $name = $x['user_name'];
                        $this->session->set_userdata('access', 'Book');
                        $this->session->set_userdata('id',$id);
                        $this->session->set_userdata('name',$name);
                        redirect('book');
                    }
                }else{
                    $url=base_url('auth');
                    echo $this->session->set_flashdata('message','<span onclick="this.parentElement.style.display=`none`" class="w3-button w3-large w3-display-topright">&times;</span>
                    <h3>Uupps!</h3>
                    <p>Akun kamu telah di blokir. Silahkan hubungi admin.</p>');
                    redirect($url);
                }
            }else{
                $url=base_url('auth');
                echo $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Password Salah! Tolong Coba Lagi</div>');
                redirect($url);
            }

        }else{
            $url=base_url('auth');
            echo $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Email Salah!</div>');
            redirect($url);
        }

    }

    function logout(){
        $this->session->sess_destroy();
        $url=base_url('auth');
        redirect($url);
    }

}