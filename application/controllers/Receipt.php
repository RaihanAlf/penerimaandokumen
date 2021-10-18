<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Receipt extends CI_Controller {

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
        $data['data'] = $this->Post_model->datapertgl();
        if( $this->input->post('keyword') ) {
            $data['data'] = $this->Post_model->cari();
        }
		$this->load->view('receipt/index', $data);
	}

	public function view_all(){

        $data=array(
            'data' => $this->Post_model->view_all()
            );
            $this->load->view('receipt/index',$data);
    }

    public function list_receipt()
	{
        $tanggal = $this->input->get('tanggal');
        
        $data=array(
            'data' => $this->Post_model->datapertgl_cari($tanggal),
            'tanggal' => $tanggal
        );
        $this->load->view('receipt/index',$data);
            
	}

	function simpan_ga(){
        if($this->input->post('checkbox_value'))
        {
            $ga = $this->input->post('ga_');
            $ob = $this->input->post('ob_');
            $id = $this->input->post('checkbox_value');
            for($count = 0; $count < count($id); $count++) {
              $this->Post_model->simpan_ga($id[$count],$ga,$ob);
            }
        }
        $form_data['success'] = true;
        echo json_encode($form_data);
    }

    public function update_dokumen(){
        $id = $this->input->post('id');
        $penerima=$this->input->post('penerima');
        $updated = $this->Post_model->update_dokumen($id,$penerima);

        if($updated){
            $this->session->set_flashdata('message', 'Penerima Telah Ditambahkan');
            redirect('receipt/index');
        }
    }

    function upload_gambar()
	{
		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		// $config['max_size']             = 100;
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;
		$config['encrypt_name']			= TRUE;
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('bukti_terima'))
		{
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('receipt/index', $error);
		}
		else
		{
			$id = $this->input->post('id');
			$data['bukti_terima'] = $this->upload->data("file_name");
            $this->db->where('id', $id);
			$uploaded = $this->db->update('dokumen',$data);
		}

        if ($uploaded){
            $this->session->set_flashdata('message', 'Gambar Telah Ditambahkan');
            redirect('receipt/index');
        }
	}

    public function contact_us()
    {
        $this->load->model('contact_model');

        $data=array(
            'data' => $this->contact_model->data()
        );
        $this->load->view('receipt/contact', $data);
    }

    public function contact()
    {
        $this->load->library('form_validation');


        if ($this->input->method() === 'post') {
            $this->load->model('feedback_model');

            $rules = $this->feedback_model->rules();
            $this->form_validation->set_rules($rules);

            if ($this->form_validation->run() == FALSE) {
            return redirect('receipt/index');
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
            redirect('receipt/index');
        }
    } 
}