<?php

if (!defined('BASEPATH'))exit('No direct script access allowed');

    include_once(APPPATH . 'controllers/MY_ContentController.php');
	
	
class Buchung extends MY_ContentController {

    public function __construct() {
        parent::__construct();

    }
	private function meta4all($metas)
		{
		foreach($metas as $meta=>$daten) 
			{
			 $data[$meta]=$daten;
			}	
		$data['title'].=" - Buchung";
		return($data);
		}
			
    public function index() 
	{
		$data=$this->meta4all($this->meta);
        $data['bookingurl'] = "https://10669.pc-booking.com/apps/v3/#?grp=75cd679f-0029-4930-98a1-4abc17fa4ab5&";
        $data['main_content'] = 'buchung/buchung_content';
        $this->load->view('template', $data);
    }

    public function offline() { 
		$data=$this->meta4all($this->meta);      
        $data['title'] .= ' - Buchungssystem offline';
        $data['main_content'] = 'buchung/buchung_offline';
        $this->load->view('template', $data);
    }
}