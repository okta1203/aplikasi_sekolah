<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_siswa extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_user');
	}
	public function view_admin()
	{
		$data['siswa'] = $this->m_user->read_all_user_siswa()->result_array();
		$this->load->view('admin/siswa',$data);
	}

		public function tambah_siswa()
	{


			$id_user_detail = $this->input->post('id_user_detail');
			$nama_lengkap = $this->input->post('nama_lengkap');
			$alamat = $this->input->post('alamat');
			$tempat_lahir = $this->input->post('tempat_lahir');
			$tanggal_lahir = $this->input->post('tanggal_lahir');
			$agama = $this->input->post('agama');
			$nik = $this->input->post('nik');
			$jenis_kelamin = $this->input->post('jenis_kelamin');
			$nidn = $this->input->post('nidn');
			$skhun = $this->input->post('skhun');
			$ijazah = $this->input->post('ijazah');
			$foto = $this->input->post('foto');
			$kelas = $this->input->post('kelas');
			$nilai_ipa = $this->input->post('nilai_ipa');
			$nilai_ips = $this->input->post('nilai_ips');
			$nilai_matematika = $this->input->post('nilai_matematika');
			$nilai_bahasa_inggris = $this->input->post('nilai_bahasa_inggris');
			$nilai_bahasa_indonesia = $this->input->post('nilai_bahasa_indonesia');
			$id_lulus_verifikasi = $this->input->post('id_lulus_verifikasi');
			$id_status_lulus = $this->input->post('id_status_lulus');
			$foto_name = md5($id_user_detail.$nama_lengkap.$tempat_lahir.$tanggal_lahir.$agama.$nik
			.$jenis_kelamin.$nidn.$skhun.$ijazah.$foto.$kelas.$nilai_ipa.$nilai_ips.$nilai_matematika.
			 $nilai_bahasa_indonesia.$id_lulus_verifikasi,$id_status_lulus.rand(1,9999));

			 $path = './assets/gambar/';

			$this->load->library('upload');
			$config['upload_path'] = './assets/gambar';
			$config['allowed_types'] = 'jpg|png|jpeg|gif';
			$config['max_size'] = '10000'; //2MB max
			$config['max_width'] = '4480'; // pixel
			$config['max_height'] = '4480'; // pixel
			$config['file_name'] = $foto_name;
			$this->upload->initialize($config);
			$foto_pengumuman_upload = $this->upload->do_upload('foto_siswa');
		
			
			if($foto_siswa_upload)
			{
				$foto_siswa= $this->upload->data();
			}else{
				$this->session->set_flashdata('error_file_gambar_berita',
				'error_file_gambar_berita');
				redirect('Data_Siswa/view_admin');
			}


			$hasil = $this->m_user->insert_siswa($id_user_detail,$nama_lengkap,$tempat_lahir,$tanggal_lahir,$agama,$nik
			,$jenis_kelamin,$nidn,$skhun,$ijazah,$foto,$kelas,$nilai_ipa,$nilai_ips,$nilai_matematika,
			 $nilai_bahasa_indonesia);


			if($hasil==false){

				$this->session->set_flashdata('error_input','error_input');
				redirect('Data_Siswa/view_admin');

			}else{
				$this->session->set_flashdata('input','input');
				redirect('Data_Siswa/view_admin');
			}
	}
 
	public function edit_siswa()
	{
		$id_user_detail = $this->input->post('id_user_detail');
			$nama_lengkap = $this->input->post('nama_lengkap');
			$alamat = $this->input->post('alamat');
			$tempat_lahir = $this->input->post('tempat_lahir');
			$tanggal_lahir = $this->input->post('tanggal_lahir');
			$agama = $this->input->post('agama');
			$nik = $this->input->post('nik');
			$jenis_kelamin = $this->input->post('jenis_kelamin');
			$nidn = $this->input->post('nidn');
			$skhun = $this->input->post('skhun');
			$ijazah = $this->input->post('ijazah');
			$foto = $this->input->post('foto');
			$kelas = $this->input->post('kelas');
			$nilai_ipa = $this->input->post('nilai_ipa');
			$nilai_ips = $this->input->post('nilai_ips');
			$nilai_matematika = $this->input->post('nilai_matematika');
			$nilai_bahasa_inggris = $this->input->post('nilai_bahasa_inggris');
			$nilai_bahasa_indonesia = $this->input->post('nilai_bahasa_indonesia');
			$id_lulus_verifikasi = $this->input->post('id_lulus_verifikasi');
			$id_status_lulus = $this->input->post('id_status_lulus');
			$foto_name = md5($id_user_detail.$nama_lengkap.$tempat_lahir.$tanggal_lahir.$agama.$nik
			.$jenis_kelamin.$nidn.$skhun.$ijazah.$foto.$kelas.$nilai_ipa.$nilai_ips.$nilai_matematika.
			 $nilai_bahasa_indonesia.$id_lulus_verifikasi,$id_status_lulus.rand(1,9999));

			$path = './assets/gambar/';

			$this->load->library('upload');
			$config['upload_path'] = './assets/gambar';
			$config['allowed_types'] = 'jpg|png|jpeg|gif';
			$config['max_size'] = '10000'; //10MB max
			$config['max_width'] = '4480'; // pixel
			$config['max_height'] = '4480'; // pixel
			$config['file_name'] = $foto_name;
			$this->upload->initialize($config);
			$foto_siswa_upload = $this->upload->do_upload('foto_siswa');
		
			
			if($foto_siswa_upload)
			{
				$foto_siswa = $this->upload->data();
			}else{
				$this->session->set_flashdata('error_file_gambar_berita',
				'error_file_gambar_berita');
				redirect('Data_Siswa/view_admin');
			}


	

			$hasil = $this->m_user->update_siswa($id_user_detail,$nama_lengkap,$tempat_lahir,$tanggal_lahir,$agama,$nik
			,$jenis_kelamin,$nidn,$skhun,$ijazah,$foto,$kelas,$nilai_ipa,$nilai_ips,$nilai_matematika,
			 $nilai_bahasa_indonesia);


			if($hasil==false){

				$this->session->set_flashdata('error_update','error_update');
				redirect('Data_Siswa/view_admin');

			}else{

				@unlink($path.$this->input->post('foto_siswa_old'));
				$this->session->set_flashdata('update','update');
				redirect('Data_Siswa/view_admin');
			}
	}
	public function view_admin_terverifikasi()
	{
		$this->load->view('admin/siswa_terverifikasi');
	}

	public function view_admin_lulus_berkas()
	{
		$this->load->view('admin/siswa_lulus_berkas');
	}
	
	public function view_admin_lulus_seleksi()
	{
		$this->load->view('admin/siswa_lulus_seleksi');
	}


	}
