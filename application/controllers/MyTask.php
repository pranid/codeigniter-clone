<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MyTask extends MY_Controller
{

    public function index()
    {
        $this->load->view('viw_template', array('content' => 'viw_mytasks', 'menu' => 'viw_menu'));
    }

}

/* End of file MyTask.php */
/* Location: ./application/controllers/MyTask.php */