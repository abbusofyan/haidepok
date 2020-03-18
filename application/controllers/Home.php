<?php

class Home extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->helper('url');
    $this->load->helper('text');
    //$this->load->model('M_Home');
    //$this->load->library('custom_upload');

}
private function load($title = '', $datapath = '')
{
    $page = array(
        "head"    => $this->load->view('template/head', array("title" => $title), true),
        "header"  => $this->load->view('template/header', false, true),
        "main_js" => $this->load->view('template/main_js', false, true),
        "footer"  => $this->load->view('template/footer', false, true)
    );
    return $page;
}

public function index(){
    $path = "";
    $data = array(
        "page"    => $this->load("landingpage", $path) ,
        "content" => $this->load->view('landingpage', false, true)
    );

    $this->load->view('template/default_template', $data);
   }

public function detailruangpublik(){
    $path = "";
    $data = array(
        "page"    => $this->load("detailruangpublik", $path) ,
        "content" => $this->load->view('detailruangpublik', false, true)
    );

    $this->load->view('template/default_template', $data);
   }

public function bookproses1(){
    $path = "";
    $data = array(
        "page"    => $this->load("bookproses1", $path) ,
        "content" => $this->load->view('publik/bookproses1', false, true)
    );

    $this->load->view('template/default_template', $data);
   }

public function bookproses2(){
    $path = "";
    $data = array(
        "page"    => $this->load("bookproses2", $path) ,
        "content" => $this->load->view('publik/bookproses2', false, true)
    );

    $this->load->view('template/default_template', $data);
   }

public function bookproses3(){
    $path = "";
    $data = array(
        "page"    => $this->load("bookproses3", $path) ,
        "content" => $this->load->view('publik/bookproses3', false, true)
    );

    $this->load->view('template/default_template', $data);
   }

public function daftarruangpublik(){
    $path = "";
    $data = array(
        "page"    => $this->load("daftarruangpublik", $path) ,
        "content" => $this->load->view('daftarruangpublik', false, true)
    );

    $this->load->view('template/default_template', $data);
   }

public function newsandevent(){
   $path = "";
   $data = array(
       "page"    => $this->load("newsandevent", $path) ,
       "content" => $this->load->view('newsandevent', false, true)
   );

   $this->load->view('template/default_template', $data);
  }


}
