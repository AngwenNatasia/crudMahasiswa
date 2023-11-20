<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hitung3 extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->library('tabung');
    }
    function index(){
        $pi = 3.14;
        $jari = 5;
        $tinggi = 3;
        echo "Pi: ".$pi."<br>";
        echo "Jari-jari: ".$jari."<br>";
        echo "Tinggi: ".$tinggi."<br>";
        $this->tabung->volume($pi,$jari,$tinggi);
        echo "<hr>";
        $this->tabung->luasPermukaan($pi,$jari,$tinggi);
        echo "<hr>";
        $this->tabung->luasSelimut($pi,$jari,$tinggi);
        echo "<hr>";
    }
}
?>