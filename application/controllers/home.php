<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Home extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->helper('url');
  }

  public function index() {
    $data['menu'] = 'home';
    $data['show'] = 'home/index';
    $this->load->view('layout/layout', $data);
  }

}
