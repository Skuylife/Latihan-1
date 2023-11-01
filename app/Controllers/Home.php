<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function mhs()
    {
        return view('tabelmhs');
    }

    public function travel() 
    {
       return view('viewsppd'); 
    }

    public function bay()
    {
        return view('pembayaran');
    }

    public function hitungbiaya()
    {
        $kode = $this->request->getPost('kode');
        $agenda = $this->request->getPost('agenda');
        $trns = $this->request->getPost('transportasi');
        $penginapan = $this->request->getPost('penginapan');
        $pokok = $this->request->getPost('pokok');
        $total = $this->request->getPost('total');
        echo "<br>";
        echo "<center>";
        echo "Kode Keberangkatan: $kode <br> ";
        echo "Agenda : $agenda<br>";
        echo "Biaya Transportasi : $trns<br>";
        echo "Biaya Penginapan : $penginapan<br>";
        echo "Biaya Pokok : $pokok<br>";
        echo "Total : $total<br>";
        echo "</center>"; 
    }

    public function bayar()
    {
        $bks = $this->request->getPost('bakso');
        $smy = $this->request->getPost('somay');
        $ma = $this->request->getPost('mieayam');
        $est = $this->request->getPost('est');
        $mbr = $this->request->getPost('member');
        $total = $this->request->getPost('total');
        echo "<br>";
        echo "<center>";
        echo "Form Pembayaran<br> ";
        echo "Bakso: $bks <br> ";
        echo "Somay : $smy<br>";
        echo "Mie Ayam : $ma<br>";
        echo "Es Teh : $est<br>";
        echo "Member : $mbr<br>";
        echo "Total : $total<br>";
        echo "</center>";
    }

    public function simpan()
    {
        $db = \Config\Database::connect();
        $data =[
            'kode' => $this->request->getPost('kode'),
            'agenda' => $this->request->getPost('agenda'),
            'btransportasi' => $this->request->getPost('transportasi'),
            'bpenginapan' => $this->request->getPost('penginapan'),
            'bpokok' => $this->request->getPost('pokok'),
            'total' => $this->request->getPost('total'),
        ];
        $simpan = $db->table('sppd')->insert($data);
        if ($simpan = TRUE) {
            echo "<script>
            alert('Data Berhasil Disimpan');
            window.location='/home/tampil'
            </script>";
        } else {
            echo "<script>
            alert('Data Gagal Disimpan');
            window.location='/home/sppd'
            </script>";
        }
    }

    function tampil()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('sppd');
        $query = $builder->get();
        $data ['sppdok'] = $query->getResultArray();
        return view('tampilsppd', $data);
    }
    
    public function proses()
    {
        $nobp = $this->request->getPost('nobp');
        $nama = $this->request->getPost('nama');
        $tgs = $this->request->getPost('ntgs');
        $uts = $this->request->getPost('nuts');
        $uas = $this->request->getPost('nuas');
        echo "<center>";
        echo "NoBP: $nobp <br> ";
        echo "Nama : $nama<br>"; 
        echo "Tugas : $tgs<br>";
        echo "UTS : $uts<br>";
        echo "UAS : $uas<br>";
        $hasil = ($uas*0.3) + ($uts*0.3) + ($tgs*0.4);
        echo $hasil;
        echo "</center>";
    }

}
