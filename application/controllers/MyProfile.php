<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MyProfile extends MY_Controller
{

    public function index()
    {
        $this->load->view('viw_template', array('content' => 'viw_myprofile', 'menu' => 'viw_menu'));
    }

}

/* End of file MyProfile.php */
/* Location: ./application/controllers/MyProfile.php */