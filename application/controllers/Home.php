<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        // $data = $this->db->query('SELECT * FROM biodata');
        // $datadb = array('datadb' => $data);
        // // foreach ($data->result_array() as $data) {
        // //   $datadb = array('nama' => $data['nama'] );
        // // }
        //   $this->load->view('home',$datadb);

        $data = $this->Md_biodata->get_biodata();
        $datadb = array(
          'datadb' => $data,

         );
        $this->load->view('template/header');
        $this->load->view('home', $datadb);
        $this->load->view('template/footer');
    }
    public function biodata()
    {
        // echo base_url();
        $data = array(
            'nama' => 'Edi Prayitno',
            'alamat' =>'Ciledug',
            'hoby' => 'Main Guitar',
            'url'=>base_url());

        $this->load->view('v_biodata', $data);
    }
    public function parameter($a='', $b='', $c='')
    {
        echo "pengenalan parameter";
        echo $a;
        echo $b;
        echo $c;
    }
    public function tampung()
    {
        $nama = $_POST['nama'];
        $almt = $_POST['alamat'];
        // $jk = $_POST['jenkel'];
        $hobi = array(
    $_POST['membaca'],
    $_POST['menulis'],
    $_POST['masak']
   );

        $data = array(
          'nama' => $nama,
          'alamat'=>$almt,
          // 'jenkel'=> $jk,
          'hoby'=> $hobi[0]." ".$hobi[1]," ".$hobi[2]
    );

        $this->load->view('v_biodata', $data);
    }
    public function form_biodata()
    {$data = array(
    'judul' => 'Form Biodata',
    'proses' => 'Simpan',
    'action' => 'Home/tambah'
    );
    // print_r($data);
        $this->load->view('template/header');
        $this->load->view('form_biodata',$data);
        $this->load->view('template/footer');
    }
    public function tambah()
    {
        $data = array(
        'nama' => $_POST['nama'],
        'alamat' => $_POST['alamat'],
        'jenis_kelamin' => $_POST['jenkel'],
        'hobi' => implode(",", $_POST['hobi'])
       );
        $this->Md_biodata->tambah_data($data);
        redirect(base_url());
    }
    public function hapus($id)
    {
        $data = array('id' => $id );
        $this->Md_biodata->hapus_data($data);
        redirect(base_url());
    }
    public function get_ubah($id)
    {
        $data = $this->Md_biodata->get_ubah_data($id);
        $datadb = array(
          'id' => $id,
          'data' => $data,
          'judul'=>'Ubah Biodata',
          'proses' => 'Ubah',
          'action' => 'Home/ubah'
      );
        $this->load->view('template/header');
        $this->load->view('form_biodata',$datadb);
        $this->load->view('template/footer');
        // echo $data[0];
    }
    public function ubah(){
      $data = array(
        'nama'=> $_POST['nama'],
        'alamat'=> $_POST['alamat'],
        'hobi'=>implode(',',$_POST['hobi']),
        'jenis_kelamin'=> $_POST['jenkel']
       );
       // echo "<pre>";
       // print_r($data);
       // echo "</pre>";
      $this->Md_biodata->ubah_data($data,$_POST['id']);
      redirect(base_url());
    }
}
