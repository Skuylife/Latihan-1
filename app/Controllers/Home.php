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
       return view('dtravel'); 
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