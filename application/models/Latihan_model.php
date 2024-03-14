<?php
class Latihan_model extends CI_Model
{
    function kirim()
    {
        return $this->db->query("Select * from pelanggan");
    }

    function masukdata($data, $table)
    {
        $this->db->insert($table, $data);
    }
}
