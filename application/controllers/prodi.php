<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Don't forget include/define REST_Controller path

/**
 *
 * Controller Mahasiswa
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class prodi extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model('prodi_model');

  }

  public function index()
  {
      $data['judul'] = "Halaman Kaprodi";
      $data['prodi'] = $this->prodi_model->get();
      $this->load->view("layout/header");
      $this->load->view("prodi/vw_prodi", $data);
      $this->load->view("layout/footer");
  }

  public function tambah()
  {
    $data['judul']= "Halaman Tambah Mahasiswa";
    $data['user']=$this->db->get_where('user',['email' =>$this->session->userdata('email')])->row_array();
    $data['prodi'] =$this->prodi_model->get();

    $this->form_validation->set_rules('nama','Nama','required',[
      'required' => 'Nama Wajib di isi'
    ]);
    $this->form_validation->set_rules('ruangan','Ruangan','required',[
      'required' => 'Ruangan Wajib di isi'
    ]);
    $this->form_validation->set_rules('jurusan','Jurusan','required',[
      'required' => 'Jurusan Wajib di isi'
    ]);
    $this->form_validation->set_rules('akreditasi','Akreditasi','required',[
      'required' => 'Akreditasi Wajib di isi'
    ]);
    $this->form_validation->set_rules('nama_kaprodi','Nama Kaprodi','required',[
      'required' => 'Nama kaprodi Wajib di isi'
    ]);
    $this->form_validation->set_rules('tahun_berdiri','Tahun Berdiri','required',[
      'required' => 'Tahun Berdiri Wajib di isi'
    ]);
    $this->form_validation->set_rules('output_lulusan','Output Lulusan','required|integer',[
      'required' => 'Output Lulusan Wajib di isi',
    ]);

    if ($this->form_validation->run() == false){
      $this->load->view("layout/header",$data);
      $this->load->view("Prodi/vw_tambah_prodi",$data);
      $this->load->view("layout/footer");
    }else {
      $data= [
      'nama' => $this->input->POST('nama'),
      'ruangan' => $this->input->POST('ruangan'),
      'jurusan' => $this->input->POST('jurusan'),
      'akreditasi' => $this->input->POST('akreditasi'),
      'nama_kaprodi' => $this->input->POST('nama_kaprodi'),
      'tahun_berdiri' => $this->input->POST('tahun_berdiri'),
      'output_lulusan' => $this->input->POST('output_lulusan'),
      ];
      $upload_image = $_FILES['gambar']['name'];
      if ($upload_image){
        $config['allowed_types'] = 'gif|jpeg|png';
        $config['max_size'] = '2048';
        $config['upload_path'] = './assets/img/prodi/';
        $this->load->library('upload', $config);
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('gambar')) {
          $new_image = $this->upload->data('file_name');
          $this->db->set('gambar', $new_image);
        } else {
          echo $this->upload->display_errors();
        }
      }
      $this->prodi_model->insert($data, $upload_image);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data
      Mahasiswa Berhasil Ditambah!</div>');
      redirect('Prodi');
      }
  }


  public function detail($id)
  {
    $data['judul'] = "Halaman Detail Prodi";
    $data['prodi'] = $this->prodi_model->getById($id);
    $this->load->view("layout/header");
    $this->load->view("prodi/vw_detail_prodi", $data);
    $this->load->view("layout/footer");
  }


  public function hapus($id)
  {
    $this->Prodi_model->delete($id);
    $error =$this->db->error();
    if($error['code'] != 0) {
      $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert"><i class="icon fas fa-info-circle"></i>Data Prodi tidak dapat dihapus(sudah berelasi)!</div>');

    }else {
      $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert"><i class="icon fas fa-check-circle"></i>Data Prodi berhasil dihapus!</div>');
    }
    redirect('Prodi');
  }


  function upload ()
  {
    $data = [
      'nama' => $this->input->POST('nama'),
      'ruangan' => $this->input->POST('ruangan'),
      'jurusan' => $this->input->POST('jurusan'),
      'akreditasi' => $this->input->POST('akreditasi'),
      'nama_kaprodi' => $this->input->POST('nama_kaprodi'),
      'tahun_berdiri' => $this->input->POST('tahun_berdiri'),
      'output_lulusan' => $this->input->POST('output_lulusan'),
    ];
    $this->prodi_model->insert($data);
    redirect('prodi');
  }


  public function edit($id)
  {
     $data['judul'] = "Halaman Edit Prodi";
    $data['prodi'] = $this->prodi_model->getById($id);
    $data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();
    $this->form_validation->set_rules('nama', 'Nama', 'required', [
      'required' => 'nama Wajib di isi'
    ]);
    
    $this->form_validation->set_rules('ruangan', 'Ruangan', 'required', [
      'required' => 'ruangan Wajib di isi'
    ]);
    
    $this->form_validation->set_rules('jurusan', 'Jurusan', 'required', [
    'required' => 'Jurusan Wajib di isi'
    ]);
    
    $this->form_validation->set_rules('akreditasi', 'Akreditasi', 'required', [
    'required' => 'Akreditasi Wajib di isi'
    ]);

    $this->form_validation->set_rules('nama_kaprodi', 'Nama Kaprodi', 'required', [
    'required' => 'Nama Kaprodi Wajib di isi'
    ]);
    
    $this->form_validation->set_rules('tahun_berdiri', 'Tahun Berdiri', 'required', [
    'required' => 'Tahun Berdiri Wajib di isi'
    ]);
    
    $this->form_validation->set_rules('output_lulusan', 'Output Lulusan', 'required', [
    'required' => 'Output Lulusan Wajib di isi'
    ]);
    
    if ($this->form_validation->run() == false) {
    $this->load->view("layout/header", $data);
    $this->load->view("prodi/vw_ubah_prodi", $data);
    $this->load->view("layout/footer");
    } else {
      $data = [
      'nama' => $this->input->POST('nama'),
      'ruangan' => $this->input->POST('ruangan'),
      'jurusan' => $this->input->POST('jurusan'),
      'akreditasi' => $this->input->POST('akreditasi'),
      'nama_kaprodi' => $this->input->POST('nama_kaprodi'),
      'tahun_berdiri' => $this->input->POST('tahun_berdiri'),
      'output_lulusan' => $this->input->POST('output_lulusan'),
    ];
    $upload_image = $_FILES['gambar']['name'];
    if ($upload_image){
        $config['allowed_types'] = 'gif|jpeg|png';
        $config['max_size'] = '2048';
        $config['upload_path'] = './assets/assets/img/prodi/';
        $this->load->library('upload', $config);
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('gambar')) {
          $new_image = $this->upload->data('file_name');
          $this->db->set('gambar', $new_image);
        } else {
          echo $this->upload->display_errors();
        }
    }
    $id = $this->input->post('id');
    $this->Mahasiswa_model->update(['id' => $id], $data);
    $this->session->set_flashdata('message', '<div class="alert alert-success"
    role="alert">Data Mahasiswa Berhasil DiUbah!</div>');
    redirect('Prodi');
    }
  }


  public function update()
  {
    $data = [
      'nama' => $this->input->POST('nama'),
      'ruangan' => $this->input->POST('ruangan'),
      'jurusan' => $this->input->POST('jurusan'),
      'akreditasi' => $this->input->POST('akreditasi'),
      'nama_kaprodi' => $this->input->POST('nama_kaprodi'),
      'tahun_berdiri' => $this->input->POST('tahun_berdiri'),
      'output_lulusan' => $this->input->POST('output_lulusan'),
    ];
    $upload_image = $_FILES['gambar']['name'];
    if ($upload_image) {
    $config['allowed_types'] = 'gif|jpg|png';
    $config['max_size'] = '2048';
    $config['upload_path'] = './assets/img/prodi/';
    $this->load->library('upload', $config);
    if ($this->upload->do_upload('gambar')) {
      $old_image = $data['prodi']['gambar'];
        if ($old_image != 'default.jpg') {
            unlink(FCPATH . 'assets/img/prodi/' . $old_image);
        }
        $new_image = $this->upload->data('file_name');
        $this->db->set('gambar', $new_image);
    } else {
        echo $this->upload->display_errors();
    }
    }
    
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Dosen Berhasil
    Diubah!</div>');
    redirect('Prodi');
  }

}


/* End of file Mahasiswa.php */
/* Location: ./application/controllers/Mahasiswa.php */