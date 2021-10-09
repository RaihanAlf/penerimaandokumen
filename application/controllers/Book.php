<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Book extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Post_model');
        if($this->session->userdata('logged') !=TRUE){
            $url=base_url('book');
            redirect($url);
		};
	}

	public function index()
	{
        $data['data'] = $this->Post_model->datapertgl();
        if( $this->input->post('keyword') ) {
            $data['data'] = $this->Post_model->cari();
        }
		$this->load->view('book/index', $data);
	}

    public function view_all(){

        $data=array(
            'data' => $this->Post_model->view_all()
            );
            $this->load->view('book/index',$data);
    }


    public function list_receipt()
	{
        $tanggal = $this->input->get('tanggal');
        
        $data=array(
            'data' => $this->Post_model->datapertgl_cari($tanggal),
            'tanggal' => $tanggal
        );
        $this->load->view('book/index',$data);
            
	}

    public function contact_us()
    {
        $this->load->model('contact_model');

        $data=array(
            'data' => $this->contact_model->data()
        );
        $this->load->view('book/contact', $data);
    }
	
	public function contact()
    {
        $this->load->library('form_validation');


        if ($this->input->method() === 'post') {
            $this->load->model('feedback_model');

            $rules = $this->feedback_model->rules();
            $this->form_validation->set_rules($rules);

            if ($this->form_validation->run() == FALSE) {
            return redirect('book/index');
            }


            $feedback = [
            'id' => uniqid('', true), // genearate id unik
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'message' => $this->input->post('message')
            ];

            $sent = $this->feedback_model->insert($feedback);
        }

        if ($sent){
            $this->session->set_flashdata('message', 'Pesan Telah Dikirim');
            redirect('book/index');
        }
    } 
}