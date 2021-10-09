<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pdfview extends CI_Controller {
    function __construct(){
		parent::__construct();
		$this->load->model('Post_model');
		$this->load->library('session');
		$this->load->library('form_validation');
        $this->load->helper('url');
		if($this->session->userdata('logged') !=TRUE){
            $url=base_url('receipt/dashboard');
            redirect($url);
		};
	}
    
    public function prints($tgl)
    {   
        // var_dump($tgl);exit;
        // panggil library yang kita buat sebelumnya yang bernama pdfgenerator
        $this->load->library('pdfgenerator');
        
        // title dari pdf
        // $this->data['title_pdf'] = /
                
        $data=array(
            'data' => $this->Post_model->datapertgl_cari($tgl),
            'title_pdf' => 'Data Dokumen',
            'tanggal' => $tgl
        );
        
        // filename dari pdf ketika didownload
        $file_pdf = 'laporan_dokumen_masuk';

        // setting paper
        $paper = 'A4';

        //orientasi paper potrait / landscape
        $orientation = "landscape";
        
		$html = $this->load->view('laporan_pdf',$data, true);	    
        
        // run dompdf
        $this->pdfgenerator->generate($html,$file_pdf,$paper,$orientation);
    }
}