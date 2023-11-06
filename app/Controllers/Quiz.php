<?php

namespace App\Controllers;

class Quiz extends BaseController
{

    function tampil() // Menampilkan data dari database
    {
        $db = \Config\Database::connect();
        $builder = $db->table('jual'); //nama tabel di database
        $query = $builder->get();
        $data['jbaju'] = $query->getResultArray();
        return view('tampiljual', $data); //view
    }

    public function simpan() //menyimpan data pada database
    {
        $db = \Config\Database::connect();
        $data = [
            'kode' => $this->request->getPost('kode'), // memanggil name pada form dengan method post
            'jenis' => $this->request->getPost('jenis'),
            'hrg' => $this->request->getPost('harga'),
            'jml' => $this->request->getPost('jumlah'),
            'total' => $this->request->getPost('total'),
        ];
        $simpan = $db->table('jual')->insert($data);
        if ($simpan = TRUE) {
            echo "<script>
            alert('Data Berhasil Disimpan');
            window.location='/Quiz/tampil'
            </script>";
        } else {
            echo "<script>
            alert('Data Gagal Disimpan');
            window.location='/Quiz/tampijual'
            </script>";
        }
    }

    public function jual()
    {
        return view('penjualan'); // form input data
    }

    public function index(): string
    {
        return view('welcome_message'); // tampilan awal
    }
}
