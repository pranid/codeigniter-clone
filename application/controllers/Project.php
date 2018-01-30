<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project extends MY_Controller
{

    public function index()
    {
        $this->load->view('viw_template', array('content' => 'viw_projects', 'menu' => 'viw_menu'));
    }


}

/* End of file Project.php */
/* Location: ./application/controllers/Project.php */