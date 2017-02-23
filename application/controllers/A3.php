<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class A3 extends CI_Controller {

  /**
   * Index Page for this controller.
   *
   * Maps to the following URL
   * 		http://example.com/index.php/welcome
   * 	- or -
   * 		http://example.com/index.php/welcome/index
   * 	- or -
   * Since this controller is set as the default controller in
   * config/routes.php, it's displayed at http://example.com/
   *
   * So any other public methods not prefixed with an underscore will
   * map to /index.php/welcome/<method_name>
   * @see https://codeigniter.com/user_guide/general/urls.html
   */
  public function index() {
    $this->load->view('welcome_message');
  }

  public function phoneNum($phone_num) {
    echo $phone_num;
    $data['common_content'] = "共用內容";
    $data['my_header'] = "我的body 判斷 " . $phone_num;
    $data['my_body'] = "我的body 判斷 " . $phone_num;
    $data['my_footer'] = "我的body 判斷 " . $phone_num;
    $data['title'] = 'a3 doc3';
    $this->load->view('header', $data);
    $this->load->view('body', $data);
    $this->load->view('footer', $data);
  }

}
