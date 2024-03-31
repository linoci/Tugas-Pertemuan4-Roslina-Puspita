<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {
    function __construct() {
        parent::__construct();
    }
    
    public function index() {
        $data['judul'] = "Halaman Depan";
        $this->load->view('v_header', $data);
        $this->load->view('v_index', $data);
        $this->load->view('v_footer', $data);
    }
    public function about() {
        $data['judul'] = "Halaman About";
        $this->load->view('v_header', $data);
        $this->load->view('v_about', $data); // Ubah v_index menjadi v_about jika file v_about.php ada
        $this->load->view('v_footer', $data);
    }
}
?>