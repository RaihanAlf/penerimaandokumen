<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Security extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Post_model');
        if($this->session->userdata('logged') !=TRUE){
            $url=base_url('auth');
            redirect($url);
		};
	}

	public function index()
	{
		// $user['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data=array(
            'data' => $this->Post_model->datapertgl(),
        );
		$this->load->view('security/index', $data);
	}

	function simpan_dokumen(){
        $pengirim=$this->input->post('pengirim');
        $kota_pengirim=$this->input->post('kota_pengirim');
        $tujuan=$this->input->post('tujuan');
        $jenis_barang=$this->input->post('jenis_barang');
        $security=$this->input->post('security');
        $saved = $this->Post_model->simpan_dokumen($pengirim,$kota_pengirim,$tujuan,$jenis_barang,$security);
        
        if ($saved){
            $this->session->set_flashdata('message', 'Data Berhasil Dibuat');
            redirect('security');
        }
    }

    public function contact_us()
    {
        $this->load->model('contact_model');

        $data=array(
            'data' => $this->contact_model->data()
        );
        $this->load->view('security/contact', $data);
    }

    public function contact()
    {
    $this->load->library('form_validation');


    if ($this->input->method() === 'post') {
        $this->load->model('feedback_model');

        $rules = $this->feedback_model->rules();
        $this->form_validation->set_rules($rules);

        if ($this->form_validation->run() == FALSE) {
        return redirect('security');
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
			redirect('security');
		}  
    }
}