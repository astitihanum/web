<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reservasi extends CI_Controller {

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

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('Reservasi_model', 'rm');
		
	}

	public function index()
	{
		$this->load->view('template/header_user');
		$this->load->view('Reservasi/index');
		$this->load->view('template/footer');
	}

	//kenapa gabisa 

	public function grooming()
	{
		$this->load->view('Reservasi/grooming');
	}

	public function penitipan()
	{
		$this->load->view('Reservasi/penitipan');
	}

	public function pemeriksaan()
	{
		$this->load->view('Reservasi/pemeriksaan');
	}

	public function tambah_grooming()
	{
		$ins = array(
			'tgl_grooming' => date('Y-m-d'), 
			'id_wali' => $this->input->post('id_wali'),
			'hewan' => $this->input->post('hewan'),
			'status' => 'mengajukan'
		);

		$this->rm->ins('grooming', $ins);

		$this->session->set_flashdata('pesan', 'Pengajuan berhasil ! Mohon tunggu konfrimasi selanjutnya via WA!');

		redirect('Reservasi', 'refresh');
	}
	
}
