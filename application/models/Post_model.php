<?php
class Post_model extends CI_Model{

    function view_all(){
        $query = $this->db->get('dokumen');
        return $query->result_array();
    }

    function datapertgl(){
        $tgl = date('Y-m-d');
        $this->db->where('tanggal', $tgl);
        return $this->db->get('dokumen')->result_array();
    }

    function datapertgl_cari($tanggal){
        $tgl = $tanggal;
        $this->db->where('tanggal', $tgl);
        return $this->db->get('dokumen')->result_array();
    }

    function cari()
	{
        $keyword = $this->input->post('keyword');
        $this->db->like('tujuan', $keyword);
        $this->db->or_like('pengirim', $keyword);
        $this->db->or_like('kota_pengirim', $keyword);
        $this->db->or_like('security', $keyword);
        $this->db->or_like('jenis_barang', $keyword);
        $this->db->or_like('penerima', $keyword);
        $this->db->or_like('ga', $keyword);
        $this->db->or_like('ob', $keyword);
        return $this->db->get('dokumen')->result_array();            
	}

    function simpan_dokumen($nomor_data,$pengirim,$kota_pengirim,$tujuan,$jenis_barang,$security){
        $hasil=$this->db->query("INSERT INTO dokumen (nomor_data,pengirim,kota_pengirim,tujuan,jenis_barang,security) VALUES ('$nomor_data','$pengirim','$kota_pengirim','$tujuan','$jenis_barang','$security')");
        return $hasil;
    }

    function ambil_lastno() {
        // $tgl = "2021-11-02";
        $tgl = date("Y-m-d");
        $hasil = $this->db->query("SELECT nomor_data FROM dokumen WHERE tanggal='$tgl' ORDER BY id DESC LIMIT 1");
        return $hasil;
    }
 
    function update_dokumen($id,$penerima){
        $hasil=$this->db->query("UPDATE dokumen SET penerima='$penerima' WHERE id = '$id'");
        return $hasil;
    
    }

    function simpan_ga($id,$ga,$ob){
        // $this->db->where('id',$id);
        $hasil=$this->db->query("UPDATE dokumen SET ga='$ga', ob='$ob' WHERE id = '$id'");
        return $hasil;
    }

    function edit_dokumen($id,$pengirim,$kota_pengirim,$tujuan,$jenis_barang,$security,$ga,$ob,$penerima){
        $hasil=$this->db->query("UPDATE dokumen SET pengirim='$pengirim',kota_pengirim='$kota_pengirim',tujuan='$tujuan',jenis_barang='$jenis_barang',security='$security',ga='$ga',ob='$ob',penerima='$penerima' WHERE id = '$id'");
        return $hasil;
    }
    
    public function delete($id)
	{
		if (!$id) {
			return;
		}

		return $this->db->delete($this->_table, ['id' => $id]);
	}
}