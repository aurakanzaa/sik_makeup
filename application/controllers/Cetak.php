<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cetak extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('cetak_model');
		$this->load->model('labarugi_model');
		$this->load->model('perubahanmodal_model');
		$this->load->model('user_model');
		$this->load->model('neraca_model');
		$this->load->library('dompdf_gen');
		$this->load->helper('file');
		$this->load->helper('url','form');
	}

	public function index($id)
	{
		$object['labarugi']=$this->labarugi_model->getLabarugi($id);
        $object['perubahan']=$this->perubahanmodal_model->getPerubahanModals($id);
        $object['user']=$this->user_model->getDataUser();
		$this->load->view('labarugi/labarugi_detail',$object);

		$object['neraca']=$this->neraca_model->getDataNeraca();
        $object['activa']=$this->neraca_model->getTotalActiva();
        $object['pasiva']=$this->neraca_model->getTotalPasiva();
        $this->load->view('neraca/neraca_print',$object);
	}

	public function cetakPdfLabarugi($id)
    {
		$object['labarugi']=$this->labarugi_model->getLabarugi($id);
        $object['perubahan']=$this->perubahanmodal_model->getPerubahanModals($id);
        $object['user']=$this->user_model->getDataUser();
        $this->load->view('labarugi/labarugi_print',$object);

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

    public function cetakPdfNeraca($id)
    {
		$object['neraca']=$this->neraca_model->getDataNeraca();
        $object['activa']=$this->neraca_model->getTotalActiva();
        $object['pasiva']=$this->neraca_model->getTotalPasiva();
        $this->load->view('neraca/neraca_print',$object);

        $paper_size = 'A4';
        $orientation = 'landscape';
        $html = $this->output->get_output();

        $dompdf = new DOMPDF();
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream('laporan_neraca.pdf');

        unset($html);
        unset($dompdf);
    }
}
