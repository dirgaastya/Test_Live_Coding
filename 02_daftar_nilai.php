<?php
    class Nilai {
        public $mapel;
        public $nilai;

        public function __construct($mapel,$nilai)
        {
            $this->mapel = $mapel;
            $this->nilai = $nilai;
        }
    }

    class Siswa {
        public $nrp;
        public $nama;
        public $daftarNilai;

        public function __construct($nrp,$nama)
        {
            $this->nrp = $nrp;
            $this->nama = $nama;
            $this->daftarNilai = array();
        }

        public function tambahNilai($mapel,$nilai){
            array_push($this->daftarNilai, new Nilai($mapel,$nilai));
        }
    }

    function generate_random_string($length){
        $char = '012345679abcdefghijklmnopqrstupwxyzABCDEFGHIJKLMNOPQRSTUPWXYZ';
        $result = '';
        for ($i=0; $i < $length; $i++) {
            $result .= $char[rand(0, strlen($char)-1)];
        }

        return $result;
    }

    $siswaBaru = new Siswa('01234123', 'Dirga');
    $siswaBaru->tambahNilai('Bahasa Inggris', 100);

    $daftarSiswa = array();
    $daftarMapel = array('Bahasa Inggris','Bahasa Indonesia', 'Bahasa Jepang');
    for ($i=0; $i < 10; $i++) {
        $siswa = new Siswa('009911'.$i , generate_random_string(10));
        $siswa->tambahNilai($daftarMapel[rand(0,count($daftarMapel)-1)], rand(0,100));

        array_push($daftarSiswa, $siswa);
    }

    foreach ($daftarSiswa as $siswa) {
        echo '<br/> <br/> Nama: ' . $siswa->nama;
        echo '<br/> NRP: ' . $siswa->nrp;
        echo '<br/> Daftar Nilai: <br/> ';
        foreach ($siswa->daftarNilai as $key => $nilai) {
            echo $nilai->mapel . '=' . $nilai->nilai ;
        }
    }

?>
