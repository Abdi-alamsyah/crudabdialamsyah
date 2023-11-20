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

class Penumpang extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model('penumpang_model');

  }

  public function index()
  {
    $data['judul'] = "Halaman Penumpang";
    // $data['user'] = $this->db->get_where('user', ['email' =>$this->session->userdata('email')])->row_array();
    $data['penumpang'] = $this->penumpang_model->get();
    $this->load->view("layout/header",$data);
    $this->load->view("penumpang/vw_penumpang", $data);
    $this->load->view("layout/footer", $data);
  }
  public function tambah()
  {
    $data['judul'] = "Halaman Tambah Penumpang";
    $data['user'] = $this->db->get_where('user', ['email'=>$this->session->userdata('email')])->row_array();
    $data['penumpang'] = $this->penumpang_model->get();

    $this->form_validation->set_rules('nama','Nama penumpang','required',[
      'required'=>'Nama penumpang wajib di isi'
    ]);
    $this->form_validation->set_rules('jenis_kelamin','Jenis Kelamain','required',[
      'required'=>'jenis kelamin penumpang wajib di isi'
    ]);
    $this->form_validation->set_rules('No_bangku','No_bangku','required',[
      'required'=>'No bangku wajib di isi'
    ]);
    $this->form_validation->set_rules('waktu_keberangkatan','waktu_keberangkatan','required',[
      'required'=>'waktu keberangkatan wajib di isi'
    ]);
    $this->form_validation->set_rules('asal_keberangkatan','asal_keberangkatan','required',[
      'required'=>'asal keberangkatan wajib di isi'
    ]);
    $this->form_validation->set_rules('tujuan_keberangkatan','tujuan_keberangkatan','required',[
      'required'=>'tujuan_keberangkatan wajib di isi'
    ]);
    $this->form_validation->set_rules('no_hp','No HP','required',[
      'required'=>'No HP mahasiswa wajib di isi',
      'integer'=>'No HP harus angka'
    ]);

    if($this->form_validation->run()==false) {
      $this->load->view("layout/header", $data);
      $this->load->view("penumpang/vw_tambah_penumpang", $data);
      $this->load->view("layout/footer");
    } else {
      $data = [
        'nama' => $this->input->POST('nama'),
        'jenis_kelamin' => $this->input->POST('jenis_kelamin'),
        'No_bangku' => $this->input->POST('No_bangku'),
        'waktu_keberangkatan' => $this->input->POST('waktu_keberangkatan'),
        'asal_keberangkatan' => $this->input->POST('asal_keberangkatan'),
        'tujuan_keberangkatan' => $this->input->POST('tujuan_keberangkatan'),
        'no_hp' => $this->input->POST('no_hp'),
      ];
      $this->penumpang_model->insert($data);
      $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">data penumpang berhasil ditambah!</div>');
      redirect('penumpang');
    }
  }


  public function hapus($id)
  {
    $this->penumpang_model->delete($id);
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data
    Penumpang Berhasil Dihapus!</div>');
    redirect('penumpang');
  }


  public function edit($id)
  {
    $data['judul'] = "Halaman Tambah Penumpang";
    $data['user'] = $this->db->get_where('user', ['email'=>$this->session->userdata('email')])->row_array();
    $data['penumpang'] = $this->penumpang_model->get();

    $this->form_validation->set_rules('nama','Nama penumpang','required',[
      'required'=>'Nama penumpang wajib di isi'
    ]);
    $this->form_validation->set_rules('jenis_kelamin','Jenis Kelamain','required',[
      'required'=>'jenis kelamin penumpang wajib di isi'
    ]);
    $this->form_validation->set_rules('No_bangku','No_bangku','required',[
      'required'=>'No bangku wajib di isi'
    ]);
    $this->form_validation->set_rules('waktu_keberangkatan','waktu_keberangkatan','required',[
      'required'=>'waktu keberangkatan wajib di isi'
    ]);
    $this->form_validation->set_rules('asal_keberangkatan','asal_keberangkatan','required',[
      'required'=>'asal keberangkatan wajib di isi'
    ]);
    $this->form_validation->set_rules('tujuan_keberangkatan','tujuan_keberangkatan','required',[
      'required'=>'tujuan_keberangkatan wajib di isi'
    ]);
    $this->form_validation->set_rules('no_hp','No HP','required',[
      'required'=>'No HP mahasiswa wajib di isi',
      'integer'=>'No HP harus angka'
    ]);

    if($this->form_validation->run()==false) {
      $this->load->view("layout/header", $data);
      $this->load->view("penumpang/vw_tambah_penumpang", $data);
      $this->load->view("layout/footer");
    } else {
      $data = [
        'nama' => $this->input->POST('nama'),
        'jenis_kelamin' => $this->input->POST('jenis_kelamin'),
        'No_bangku' => $this->input->POST('No_bangku'),
        'waktu_keberangkatan' => $this->input->POST('waktu_keberangkatan'),
        'asal_keberangkatan' => $this->input->POST('asal_keberangkatan'),
        'tujuan_keberangkatan' => $this->input->POST('tujuan_keberangkatan'),
        'no_hp' => $this->input->POST('no_hp'),
      ];
      $this->penumpang_model->insert($data);
      $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">data penumpang berhasil ditambah!</div>');
      redirect('penumpang');
    }
}
  

}


/* End of file Mahasiswa.php */
/* Location: ./application/controllers/Mahasiswa.php */