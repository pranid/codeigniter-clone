<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Common_model extends MY_Model
{

    public $tbl_role = "ams_role";
    public $tbl_designation = "ams_designation";
    public $tbl_skill = "ams_skill";
    public $tbl_project_member_role = "ams_project_member_role";
    public $tbl_user = "ams_user";

    public function __construct()
    {
        parent::__construct();
    }

    public function getAllRole()
    {
        # code...
    }

    public function getAllDesignation()
    {
        # code...
    }

    public function getAllSkills()
    {
        # code...
    }

    public function createProjectMemberRole($data)
    {
        # code...
    }

    /**
     * User authentication
     * @author Praneeth Nidarshan
     * @param $POST data
     * @return array
     */
    public function userRegistration($post)
    {
        $ret = array();
        # Checking all inputs set
        if (empty($post['full_name']) && empty($post['email']) && empty($post['password'])) {
            $ret['success'] = false;
        } else {
            $data = array(
                'full_name' => $post['full_name'],
                'user_email' => $post['email'],
                'user_password' => md5($post['password']),
                'user_group' => 2,
                'log_time' => $this->getDate(),
            );

            $query = $this->db->insert($this->tbl_user, $data);

            $this->db->where('user_email', $post['email']);
            $email_exist = $this->db->count_all($this->tbl_user);

            if ($email_exist == 0) {
                # Check is query success
                if ($query) {
                    $ret['success'] = true;
                    $ret['message'] = "Successfully registered";
                    $ret['data'] = $this->userAuthentication($data);
                } else {
                    $ret['success'] = false;
                    $ret['message'] = "Sorry, Please try again.";
                    $ret['data'] = false;
                }
            } else {
                $ret['success'] = false;
                $ret['message'] = "Sorry, Email already in use.";
                $ret['data'] = false;
            }
        }

        return $ret;
    }

    /**
     * User authentication
     * @author Praneeth Nidarshan
     * @param $POST data
     * @return array
     */
    public function userAuthentication($post)
    {
        $ret = array();

        # validating post inputs
        if (empty($post['email']) && empty($post['password'])) {
            $ret['success'] = false;
        } else {
            # retrive if user credentials true
            $this->db->select('user_id, user_group,full_name');
            $this->db->from($this->tbl_user);
            $this->db->where('user_email', $post['email']);
            $this->db->where('user_password', md5($post['password']));
            $query_data = $this->db->get()->result_array();

            # Checking if user valid
            if (empty($query_data)) {

                $this->db->select('user_id, user_group,full_name');
                $this->db->from($this->tbl_user);
                $this->db->where('user_email', $post['email']);
                $query_data = $this->db->get()->result_array();

                # Checking if already registered
                if (empty($query_data)) {
                    $ret['message'] = "You are not registered.";
                } else {
                    $ret['message'] = "Invalid Email or Password.";
                }

                $ret['success'] = false;
                $ret['data'] = false;
            } else {
                $ret['success'] = true;
                $ret['message'] = "Login success";
                $ret['data'] = $query_data[0];
            }
        }

        return $ret;
    }
}

/* End of file Common.php */
/* Location: ./application/models/Common.php */