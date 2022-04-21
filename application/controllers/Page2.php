<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page2 extends CI_Controller {

	
	public function index()
	{
        $data['title_web'] = 'Bakery Ndeso';
        $this->load->view('template/header', $data);
		$this->load->view('page/donut');
        $this->load->view('template/footer');
	}
}
