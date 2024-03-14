<?php
class Latihan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Latihan_model");
    }

    public function index()
    {
        $data["ambildtplg"] = $this->Latihan_model->kirim()->result();
        $this->load->view("Latihan_view", $data);
    }
}
