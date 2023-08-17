<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$data['title'] = "Home";
		$this->load->view('home', $data);
	}

	public function about()
	{
		$data['title'] = "About Us";
		$this->load->view('about', $data);
	}

	public function early_detection()
	{
		$data['title'] = "Early Detection";
		$this->load->view('early_detection', $data);
	}

	public function education_eksim()
	{
		$data['title'] = "Education Eksim";
		$this->load->view('education_eksim', $data);
	}

	public function education_psoriasis()
	{
		$data['title'] = "Education Psoriasis";
		$this->load->view('education_psoriasis', $data);
	}

	public function education_scabies()
	{
		$data['title'] = "Education Scabies";
		$this->load->view('education_scabies', $data);
	}

	public function result()
	{
		$data['title'] = "Result";
		$this->load->view('result', $data);
	}
}
