<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProjectModel extends MY_Model
{

    public $table = "ams_project";
    public $task_table = "ams_task";

    public function getProject($project_id)
    {
        $this->db->where('project_id', $project_id);
        $project = $this->db->get($this->table)->result_array();
        if (isset($project)) {
            $ret['success'] = true;
            $ret['message'] = false;
            $ret['data'] = $project;
        } else {
            $ret['success'] = false;
            $ret['message'] = "Sorry, Please try again";
            $ret['data'] = false;
        }
        return $ret;
    }

    public function getAllProject()
    {
        $all_projects = $this->db->get($this->table)->result_array();
        if (isset($all_projects)) {
            $ret['success'] = true;
            $ret['message'] = false;
            $ret['data'] = $all_projects;
        } else {
            $ret['success'] = false;
            $ret['message'] = "Sorry, Please try again";
            $ret['data'] = false;
        }
        return $ret;
    }

    public function getProjectCount()
    {
        return $this->db->count_all($this->table);
    }

    public function createProject($post)
    {
        $data = array(
            'project_name' => $post['project_name'],
            'company_id' => $post['company_id'],
            'start_date' => $post['start_date'],
            'estim_end_date' => $post['estim_end_date'],
            'status' => $post['status'],
            'log_time' => $this->getDate(),
        );

        $insert = $this->db->insert($this->table, $data);

        if ($insert) {
            $ret['success'] = true;
            $ret['message'] = "Project created.";
            $ret['data'] = false;
        } else {
            $ret['success'] = false;
            $ret['message'] = "Sorry, Could not create the project";
            $ret['data'] = false;
        }
        return $ret;
    }

    public function updateProject($post)
    {
        $data = array(
            'project_name' => $post['project_name'],
            'company_id' => $post['company_id'],
            'start_date' => $post['start_date'],
            'estim_end_date' => $post['estim_end_date'],
            'status' => $post['status'],
            'update_log' => $this->getDate()
        );

        $this->db->where('project_id', $post['project_id']);
        $update = $this->db->update($this->table, $data);

        if ($update) {
            $ret['success'] = true;
            $ret['message'] = "Project Updated.";
            $ret['data'] = false;
        } else {
            $ret['success'] = false;
            $ret['message'] = "Sorry, Could not update the project";
            $ret['data'] = false;
        }
        return $ret;
    }

    public function deleteProject($post)
    {
        $this->db->where('project_id', $post['project_id']);
        $delete = $this->db->delete($this->table);

        if ($delete) {
            $ret['success'] = true;
            $ret['message'] = "Project Deleted.";
            $ret['data'] = false;
        } else {
            $ret['success'] = false;
            $ret['message'] = "Sorry, Could not delete the project";
            $ret['data'] = false;
        }
        return $ret;
    }
}

/* End of file Project.php */
/* Location: ./application/models/Project.php */