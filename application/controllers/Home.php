<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public $vFolder = "";

	public function __construct()
	{
		parent::__construct();

		$this->vFolder="home_v";

	}
	public function index()
	{
		$vData = new stdClass();
		$vData->vFolder=$this->vFolder;
		$this->load->view("{$vData->vFolder}/index", $vData);
	}
}
