<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('mod_mhs');
		$this->load->helper('url');

	}

	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function about($id="1"){
		if($id=="1"){
		echo "Ini About Satu";
		} elseif($id=="2"){
			$data["nama"]="Joko Maulana ";
			$this->load->view('about',$data);
	}
	}
	public function contact(){
		echo "Ini Contact";
	}

	public function lihat_semua(){
		$data['hasil']=$this->mod_mhs->get_all();
		$this->load->view('lihat',$data);
	}

	public function lihat($id){
		$data['hasil']=$this->mod_mhs->get_data($id);
		$this->load->view('lihat',$data);
	}

	public function tambah_data(){
		$this->load->view('v_input');
	}

	function tambah_aksi(){

		$nama = $this->input->post('nama');
		$nim = $this->input->post('nim');
		$email =$this->input->post('email');
		$data = array(
		'nama' => $nama,
		'nim' => $nim,
		'email' => $email );
		$this->mod_mhs->input_data('tb_mahasiswa',$data);
		redirect('welcome/lihat_semua');
		}
	
}
