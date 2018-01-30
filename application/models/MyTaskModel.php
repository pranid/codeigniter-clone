<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MyTaskModel extends MY_Model
{

    public $table = "ams_task";

    public function getTasks($member_id)
    {
        $this->db->where('reponsible', $member_id);
        $tasks = $this->db->get($this->table)->result_array();
        if (isset($tasks)) {
            $ret['success'] = true;
            $ret['message'] = false;
            $ret['data'] = $tasks;
        } else {
            $ret['success'] = false;
            $ret['message'] = "Sorry, Please try again";
            $ret['data'] = false;
        }
        return $ret;
    }

    public function getAllProjectTasks($project_id)
    {
        $this->db->where('project_id', $project_id);
        $all_tasks = $this->db->get($this->table)->result_array();
        if (isset($all_tasks)) {
            $ret['success'] = true;
            $ret['message'] = false;
            $ret['data'] = $all_tasks;
        } else {
            $ret['success'] = false;
            $ret['message'] = "Sorry, Please try again";
            $ret['data'] = false;
        }
        return $ret;
    }

    public function getTaskCount($project_id)
    {
        $this->db->where('project_id', $project_id);
        return $this->db->count_all($this->table);
    }

    public function createTasks($post)
    {
        $data = array(
            'task_name' => $post['task_name'],
            'description' => $post['description'],
            'task_owner' => $post['task_owner'],
            'responsible' => $post['responsible'],
            'due_date' => $post['due_date'],
            'task_status' => $post['task_status'],
            'project_id' => $post['project_id'],
            'log_time' => $this->getdate()
        );

        $insert = $this->db->insert($this->table, $data);
        if ($insert) {
            $ret['success'] = true;
            $ret['message'] = "Task created.";
            $ret['data'] = false;
        } else {
            $ret['success'] = false;
            $ret['message'] = "Sorry, Could not create the task";
            $ret['data'] = false;
        }
        return $ret;
    }

    public function updateTask($post)
    {
        $data = array(
            'task_name' => $post['task_name'],
            'description' => $post['description'],
            'task_owner' => $post['task_owner'],
            'responsible' => $post['responsible'],
            'due_date' => $post['due_date'],
            'task_status' => $post['task_status'],
            'project_id' => $post['project_id'],
            'update_log' => $this->getdate()
        );

        $this->db->where('task_id', $post['task_id']);
        $update = $this->db->update($this->table, $data);

        if ($update) {
            $ret['success'] = true;
            $ret['message'] = "Task Updated.";
            $ret['data'] = false;
        } else {
            $ret['success'] = false;
            $ret['message'] = "Sorry, Could not update the task";
            $ret['data'] = false;
        }
        return $ret;
    }

    public function deleteTask($task_id)
    {
        $this->db->where('task_id', $task_id);
        $delete = $this->db->delete($this->table);

        if ($delete) {
            $ret['success'] = true;
            $ret['message'] = "Task Deleted.";
            $ret['data'] = false;
        } else {
            $ret['success'] = false;
            $ret['message'] = "Sorry, Could not delete the task.";
            $ret['data'] = false;
        }

        return $ret;
    }
}

/* End of file MyTask.php */
/* Location: ./application/models/MyTask.php */