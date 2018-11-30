<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Viewpages extends CI_Controller{
    function __construct() {
        parent::__construct();
    }
    public function index(){
        $this->load->view('header.php');
        $this->load->view('index.php');
        $this->load->view('footer.php');
    }
    public function redirection($id) {
        $this->load->view('header.php');
        if($id == "contact_us"){
            $this->load->view('');
        }elseif($id == "about_us"){
            $this->load->view('');
        }
        $this->load->view('footer.php');
    }
    
}
?>