<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Hitung3 extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('tabung');
    }
    function index()
    {
        $phi = 3.14;
        $jari = 5;
        $tinggi = 3;
        echo "phi: " . $phi . "</br>";
        echo "jari: " . $jari . "</br>";
        echo "tinggi: " . $tinggi . "</br>";
        $this->tabung->volume($jari, $phi, $tinggi);
        echo "<hr>";
        $this->tabung->luas_permukaan($jari , $phi , $tinggi);
        echo "<hr>";
        $this->tabung->luas_selimut($jari , $phi , $tinggi);
    }
}