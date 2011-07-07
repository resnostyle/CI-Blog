<?php

Class Main_handling extends CI_Model {

    function recent_posts($post_count, $post_offset) {
        $this->db->select('id, title, post, date');

        $this->db->order_by('date', 'desc');
        $query = $this->db->get('post', $post_count, $post_offset);
        return $query->result();
    }

    function post_comment_page($post_id) {
        $this->db->select('id, title, post, date');
        //$query = $this->db->get('post', $post_count, $post_offset);
        $query = $this->db->get_where('post', array('id' => $post_id), '1');
        return $query->result();
        
        
    }

    function comment_post() {
        $new_post = array(
                'name'  => $this->input->post('name'),
                'comment'  => $this->input->post('comment'),
                'entry_id' => $this->input->post('entry_id'),
                'ip' => $_SERVER['REMOTE_ADDR'],
                'date' => date('m-d-Y')

        );
        $insert = $this->db->insert('comment', $new_post);
        return $insert;
    }

    function comment_list() {
        $this->db->select('name','comment','entry_id','date');
        $this->db->order_by('date', 'desc');
        $comment_Lists = $this->db->get('comment');

        return $comment_Lists->result();
        return $comment_Lists->num_rows();
    }

}


?>