<?php
    class database {
        private $host = "localhost";
        private $username = "root";
        private $password = "";
        private $database = "Latihan_xpplg";
        private $koneksi = "";

    
        function __construct(){
            $this->koneksi =  mysqli_connect($this->host, $this->username, $this->password, $this->database);
            if (mysqli_connect_errno()){
                echo "Koneksi database gagal : " . mysqli_connect_error();
            }
        }
    
        public function inputData($nama, $id_donatur, $paket, $kategori, $nominal_barang) {
              mysqli_query($this->koneksi,"INSERT INTO db_masjid VALUES
                      ('', '$nama', '$id_donatur', '$paket', '$kategori', '$nominal_barang')");
          }	
    
        public function tampilData(){
            $result = mysqli_query($this->koneksi,"SELECT * FROM db_masjid ");
           while($d = mysqli_fetch_array($result)){
            $hasil[] = $d;
           }
            return $hasil;
     
        }

        Public $targetDana = 40000000;
        public function target()
        {
            return $this->targetDana;
        }

        public function totalNominal()
        {
            $sql = $this->koneksi->prepare("SELECT SUM(nominal_barang) AS nominal FROM db_masjid");
            $sql->execute();
            $result = $sql->get_result();
            $row = $result->fetch_assoc();
            return $row;
        }

        public function totalDonatur()
        {
            $sql = $this->koneksi->prepare("SELECT * FROM db_masjid");
            $sql->execute();
            $result = $sql->get_result();
            $total = $result->num_rows;
            return $total;
        }

        public function persentase()
        {
            $tnom = $this->totalNominal();
            $persen = ($tnom ['nominal'] / $this->targetDana) * 100;
            return $persen;
        }

        
}
    ?>