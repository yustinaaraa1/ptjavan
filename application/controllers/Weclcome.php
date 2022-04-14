<?php 
class Weclcome extends CI_Controller{
	public function __construct(){
		parent::__construct();
		if ($this->session->userdata('role_id')!='1') {
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
  						<strong>Anda  Belum Login</strong>
  						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
   						 <span aria-hidden="true">&times;</span>
  						</button>
						</div>');
			  	redirect('login');
		}
	}
	public function index()
	{
		//$data['keluarga']=$this->db->query("SELECT * FROM keluarga WHERE status='anak' AND jenis_kelamin='perempuan'")->result();
		$data['keluarga']=$this->model->get_data('keluarga')->result();
		$data['title']="Data Keluarga Budi";
		$this->load->vieW('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('index',$data);
		$this->load->view('templates/footer');
	}


	public function tambah()
	{
		$data['title']="FORM TAMBAH";
		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar');
		$this->load->view('tambah',$data);
		$this->load->view('templates/footer');
	}


	public function tambah_aksi()
	{
		$this->_rules();
		if ($this->form_validation->run()==FALSE) {
			$this->tambah();
		}else{
			$nama 				=$this->input->post('nama');
			$status				=$this->input->post('status');
			$jenis_kelamin		=$this->input->post('jenis_kelamin');


			$data = array(
				'nama' 	=> $nama,
				'status' 		=> $status,
				'jenis_kelamin' => $jenis_kelamin
				 );
			$this->model->insert_data('keluarga',$data);
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Data Keluarga Berhasil DiTambahkan!!!</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>');
			redirect('Weclcome');
		}

	}

	public function update($id)
	{
		$where = array('id' => $id );
		$data['keluarga']=$this->model->get_where('keluarga',$where)->result();
		$data['title']="FORM UPDATE";
		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar');
		$this->load->view('update',$data);
		$this->load->view('templates/footer');
	}

	public function update_aksi()
	{
		$this->_rules();
		if ($this->form_validation->run()==FALSE) {
			$this->update();
		}else{
			$id 				=$this->input->post('id');
			$nama 				=$this->input->post('nama');
			$status				=$this->input->post('status');
			$jenis_kelamin		=$this->input->post('jenis_kelamin');


			$data = array(
				'nama' 			=> $nama,
				'status' 		=> $status,
				'jenis_kelamin' => $jenis_kelamin
				 );
			$where = array('id' => $id );
			$this->model->update_data('keluarga',$data,$where);
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Data Keluarga Berhasil DiUpdate!!!</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>');
			redirect('Weclcome');
		}

	}



	public function delete()
	{
		$where = array('id_anggota' => $id);
		$this->model->delete_data('keluarga',$where);
		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>1 Data Keluarga Berhasil DiHapus!!!</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>');
			redirect('admin/Data_anggota');
	}


	public function _rules()
	{
		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('status','Status','required');
		$this->form_validation->set_rules('jenis_kelamin','Jenis Kelamin','required');
	}
}


 ?>