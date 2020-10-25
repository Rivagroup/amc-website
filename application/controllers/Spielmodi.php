<?php

if (!defined('BASEPATH'))exit('No direct script access allowed');

    include_once(APPPATH . 'controllers/MY_ContentController.php');
	
	
class Spielmodi extends MY_ContentController {

    public function __construct() {
        parent::__construct();

    }
	private function meta4all($metas)
		{
		foreach($metas as $meta=>$daten) 
			{
			 $data[$meta]=$daten;
			}	
		$data['title'].=" - Spielmodi";
		return($data);
		}
			
    public function index() 
	{
		$data=$this->meta4all($this->meta);
        $data['title'] .= '  Übersicht';
        $data['main_content'] = 'spielmodi/spielmodi_overview';
        $this->load->view('template', $data);
    }    

    public function dark() {
		$data=$this->meta4all($this->meta);
        $data['title'] = ' Dark';
        $data['main_content'] = 'spielmodi/spielmodi_dark';
        $this->load->view('template', $data);
    }

    public function lastmanstanding() {
		$data=$this->meta4all($this->meta);
        $data['title'] .= ' Last Man Standing';
        $data['main_content'] = 'spielmodi/spielmodi_lastmanstanding';
        $this->load->view('template', $data);
    }

    public function solo() {
		$data=$this->meta4all($this->meta);
        $data['title'] .= ' Solo';
        $data['main_content'] = 'spielmodi/spielmodi_solo';
        $this->load->view('template', $data);
    }

    public function team() {
		$data=$this->meta4all($this->meta);
        $data['title'] .= ' Team';
        $data['main_content'] = 'spielmodi/spielmodi_team';
        $this->load->view('template', $data);
    }

    public function teamswitch() {
		$data=$this->meta4all($this->meta);
        $data['title'] .= ' Teamswitch';
        $data['main_content'] = 'spielmodi/spielmodi_teamswitch';
        $this->load->view('template', $data);
    }

    public function zombie() {
		$data=$this->meta4all($this->meta);
        $data['title'] .= ' Zombie';
        $data['main_content'] = 'spielmodi/spielmodi_zombie';
        $this->load->view('template', $data);
    }

}