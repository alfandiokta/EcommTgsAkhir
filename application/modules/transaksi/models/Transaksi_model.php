<?php
class Transaksi_model extends CI_Model
{

  public function getalltransaksi()
  {
    $this->db->select('*');
    $this->db->from('tbl_order, tbl_detail_order, tbl_pelanggan, tbl_produk');
    $this->db->where('tbl_order.id=tbl_detail_order.order_id' and 'tbl_order.pelanggan=tbl_pelanggan.id'and 'tbl_detail_order.produk=tbl_produk.id_produk');
  
    return $this->db->get()->result_array();
  }


  public function simpan_data()
  {
    $config['upload_path'] = './assets/images/';
    $config['allowed_types'] = 'jpg|png|gif|jpeg';
    $config['max_size'] = '2048000';
    // $config['max_width'] = '1024';
    // $config['max_height'] = '768';
    $config['file_name'] = url_title($this->input->post('gambar'));
    $filename = $this->upload->file_name;
    $this->upload->initialize($config);
    $this->upload->do_upload('gambar');
    $data = $this->upload->data();


    $data = array(
      'id_produk' => "",
      'nama_produk' => $this->input->post('nama_produk'),
      'harga' => $this->input->post('harga'),
      'kategori'         => $this->input->post('id'),
      'deskripsi' => $this->input->post('deskripsi'),
      'gambar' => $data['file_name']
    );
    $this->db->insert('tbl_produk', $data);
    $this->session->set_flashdata('pesan', 'Ditambahkan');
    redirect('barang');
  }
  public function editbarangId($id)
  {
    $this->db->select('*');
    $this->db->from('tbl_produk');
    $this->db->join('tbl_kategori', 'tbl_kategori.id = tbl_produk.kategori', 'left');
    $this->db->where('id_produk', $id);
    return $this->db->get()->row_array();
  }
}
