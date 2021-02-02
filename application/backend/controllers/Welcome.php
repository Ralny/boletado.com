<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	/**
	 * Constructor
	 *
	 * @author    Ralny Andrade | <ra@trivee.com.br> | https://github.com/ralny
	 * @return    void
	 */
	function __construct()
	{
		parent::__construct();

		/**
		 * Verificando se existe usuario logado
		 * Checking if a user is logged in
		 */
		//if (!$this->session->userdata('is_logged_in')) redirect(base_url('login'));
		echo 'Esou aqui';
	}

	public function index()
	{
		redirect(base_url('logs/'));
	}
}
