<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Common extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Common_model');
    }

    /**
     * AJAX User login
     */
    public function login()
    {
        $response = $this->Common_model->userAuthentication($_POST);
        # Check is data set
        if ($response['data']) {
            $this->setSession($response['data']);
            $response['redirect_url'] = base_url('index.php/Welcome/home');
        }

        unset($response['data']);
        echo json_encode($response);
    }

    /**
     * AJAX User Registration
     */
    public function register()
    {
        $response = $this->Common_model->userRegistration($_POST);

        # Check is data set
        if (isset($response['data'])) {
            $this->setSession($response['data']);
            $response['redirect_url'] = base_url('index.php/Welcome/home');
        }

        unset($response['data']);
        echo json_encode($response);
    }

    /**
     * Set session data on user valid
     */
    public function setSession($data)
    {
        $session_data = array(
            'uid' => $data['user_id'],
            'gid' => $data['user_group'],
            'fnm' => $data['full_name']
        );

        $this->session->set_userdata($session_data);
    }

    /**
     * Log out and Unset Session
     */
    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url());
    }

}

/* End of file Common.php */
/* Location: ./application/controllers/Common.php */