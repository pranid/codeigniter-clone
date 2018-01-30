<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_Controller extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->isValidUser();


    }

    /**
     * Validate User Access
     * @author Praneeth Nidarshan
     *
     */
    public function isValidUser()
    {
        if (!$this->session->userdata('uid')) {
            // redirect('Welcome/');
        }
    }
}

/* End of file My_Controller.php */
/* Location: ./application/core/My_Controller.php */