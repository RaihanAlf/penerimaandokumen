<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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
        $data['data'] = $this->Post_model->view_all();
        if( $this->input->post('keyword') ) {
            $data['data'] = $this->Post_model->cari();
        }
		$this->load->view('admin/index', $data);
	}
	
	function edit_dokumen(){
        $id = $this->input->post('id');
        $pengirim=$this->input->post('pengirim');
        $kota_pengirim=$this->input->post('kota_pengirim');
        $tujuan=$this->input->post('tujuan');
        $jenis_barang=$this->input->post('jenis_barang');
        $security=$this->input->post('security');
        $ga=$this->input->post('ga');
        $ob=$this->input->post('ob');
        $penerima=$this->input->post('penerima');
        $edited = $this->Post_model->edit_dokumen($id,$pengirim,$kota_pengirim,$tujuan,$jenis_barang,$security,$ga,$ob,$penerima);
        
        if($edited){
            $this->session->set_flashdata('message', 'Data Berhasil Diedit');
            redirect('admin/dashboard');
        }
    }

    public function delete($id = null)
	{
		if (!$id) {
			show_404();
		}

		$deleted = $this->post_model->delete($id);
		if ($deleted) {
			$this->session->set_flashdata('message', 'Data was deleted');
			redirect('admin/dashboard');
		}
	}
}
