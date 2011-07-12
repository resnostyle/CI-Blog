<?php

Class Admin_handling extends CI_Model {

    function login() {
        $this->db->where('username', $this->input->post('user_name'));
        $this->db->where('password', md5($this->input->post('pass_word')));
        $query = $this->db->get('ci_login');
        if($query->num_rows == 1) {
            return true;
        }
    }
    function post_blog () {
        $new_post = array(
                'title'  => $this->input->post('title'),
                'date'  => $this->input->post('date'),
                'post'  => $this->input->post('post'),
                'posthash' => uniqid()
                        );

        $insert = $this->db->insert('post', $new_post);
        return $insert;
    }
}

/* End of file admin_handling.php */