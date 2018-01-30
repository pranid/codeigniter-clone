<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Model extends CI_Model
{

    public function getDate()
    {
        date_default_timezone_set('Asia/Colombo');
        return date('Y-m-d H:m:s');
    }

    /**
     * Get task status
     */
    public function getStatus()
    {
        $status = array(
            1 => 'Approved',
            2 => 'In progress',
            3 => 'Cancelled',
            4 => 'Completed'
        );

        return $status;
    }

}

/* End of file MY_Model.php */
/* Location: ./application/core/MY_Model.php */