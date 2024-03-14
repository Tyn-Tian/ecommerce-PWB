<?php
class Latihan2 extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Latihan_model");
    }

    public function index()
    {
        $this->load->view("Latihan_view2");
    }

    public function simpanplg()
    {
        $kdplg = $this->input->post("kdplg");
        $nmplg = $this->input->post("nmplg");
        $almtplg = $this->input->post("almtplg");
        $kotaplg = $this->input->post("kotaplg");
        $telpplg = $this->input->post("telpplg");
        $emailplg = $this->input->post("emailplg");
        $passplg = md5($this->input->post("passplg"));

        $data = array(
            "kd_pelanggan" => $kdplg,
            "nama_pelanggan" => $nmplg,
            "alamat_pelanggan" => $almtplg,
            "kota_pelanggan" => $kotaplg,
            "telp_pelanggan" => $telpplg,
            "email_pelanggan" => $emailplg,
            "password" => $passplg,
        );
        $this->Latihan_model->masukdata($data, 'pelanggan');
        redirect('Latihan2/index');
    }
}
