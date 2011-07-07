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
                'posthash' => uniqid($this->input->post('title'))
                        );

        $insert = $this->db->insert('post', $new_post);
        return $insert;
    }

    function home_listing () {
        $this->db->select('title','date', 'posthash');
        $home_Lists = $this->db->get('post');

        return $home_Lists->result();
        return $home_Lists->num_rows();

        /*$this->db->select('title');
       $comment_Lists = $this->db->get('posts');

         return $query = $home_listing->result();
        return $home_listing->num_rows();


        /*
        $home_list = array(
                'title' => 'title'
        );


        $query = $this->db->query('post', $home_list);
        return $query; */
    }
}
