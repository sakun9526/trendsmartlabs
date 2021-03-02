<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class homepage extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('homepage.php');
	}

	public function webdevelopment()
	{
		$this->load->view('./website_views/portfolio_details/webandmobile_development');
	}

	public function cctv_control()
	{
		$this->load->view('./website_views/portfolio_details/cctvmonitoring_accesscontrol');
	}

	
	//=================================== CCTV clients ================================================//
	public function sasitha_aluthwala()
	{
		$this->load->view('./website_views/portfolio_details/CCTV/sasitha_aluthwala');

	}

	public function duminda_batapola()
	{
		$this->load->view('./website_views/portfolio_details/CCTV/duminda_batapola');

	}

	public function dushani_delgoda()
	{
		$this->load->view('./website_views/portfolio_details/CCTV/dushani_delgoda');

	}

	public function ashan_ganemulla()
	{
		$this->load->view('./website_views/portfolio_details/CCTV/ashan_ganemulla');

	}

	public function renuka_meetiyagoda()
	{
		$this->load->view('./website_views/portfolio_details/CCTV/renuka_meetiyagoda');

	}

	public function dasun_rathmalana()
	{
		$this->load->view('./website_views/portfolio_details/CCTV/dasun_rathmalana');

	}

	//===================== Access control clients ================================================//

	public function viduna_galle()
	{
		$this->load->view('./website_views/portfolio_details/ACCESSCONTROL/viduna_galle');

	}


	//====================== Security system clients =============================================//

	public function randidujewellers_ambalangoda()
	{
		$this->load->view('./website_views/portfolio_details/SECURITYSYSTEM/randidujewellers_ambalangoda');

	}

	public function comingsoon()
	{
		$this->load->view('./website_views/portfolio_details/coming_soon');
	}

}
