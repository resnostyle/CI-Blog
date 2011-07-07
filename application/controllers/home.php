<?php

class Home extends CI_Controller {

    function Home() {
        //parent::_Controller();
        parent::__construct();
    }

    function index() {


        $this->load->library('pagination');
        $this->load->database();
        $this->load->model('main_handling');

        $query = $this->main_handling->recent_posts(1, 0);
        $shorter = $this->main_handling->recent_posts(5, 1);
        $data['Shortened'] = $shorter;
        $data['Posts'] = $query;
        $data['main_content'] = 'home';

        $config['base_url'] = site_url().'/home';
        $config['total_rows'] = '10'; //return number of queries here
        $config['per_page'] = '2';
        
        $this->pagination->initialize($config);

        $this->load->view('main_defaults/main', $data);
    }

    /*function comments() {

        $this->load->helper('form');
        $data['main_content'] = 'comment_post';
        $this->load->view('main_defaults/main', $data);
    }*/

    function post($id) {


        $this->load->helper('form');
        $data['main_content'] = 'post_comment';
        $this->load->view('main_defaults/main', $data);
        
    }

   
}

?>
