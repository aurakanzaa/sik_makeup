<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cetak extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Cetak_model');
		$this->load->library('dompdf_gen');
		$this->load->helper('file');
		$this->load->helper('url','form');
	}

	public function index()
	{
		$data['ekstra']=$this->cetak_model->view_row();
		$this->load->view('uas/preview', $data);
	}

	public function cetakPdfLabarugi()
    {
        $data['labarugi']=$this->cetak_model->view_labarugi();
        $this->load->view('labarugi/labarugi_print', $data);

        $paper_size = 'A4';
        $orientation = 'landscape';
        $html = $this->output->get_output();

        $dompdf = new DOMPDF();
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream('laporan_labarugi.pdf');

        unset($html);
        unset($dompdf);
    }
}
