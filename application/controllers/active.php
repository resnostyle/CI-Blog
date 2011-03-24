<?php /* By Bryan W Pearson */

class Active extends Controller {

    function  __construct() {
        parent::Controller();
        $this->is_logged_in();
        $this->load->helper('url');
        $this->load->helper('form');


    }

    function index() {

        $this->load->database();
        $this->load->model('admin_handling');

        $query = $this->admin_handling->home_listing();

        $data['Posts'] = $query;
        $data['main_content'] = 'active';
        $this->load->view('admin_defaults/main', $data);
    }

    function post() {
        //for creating a blog post

        $data['main_content'] = 'admin_post';
        $this->load->view('admin_defaults/main', $data);
    }

    function posted() {
        $this->load->library('form_validation');
        $this->form_validation->set_message('required', 'Is the %s field empty?');
        $this->form_validation->set_rules('date', 'Date', 'trim|required');
        $this->form_validation->set_rules('title', 'Title', 'trim|required');
        $this->form_validation->set_rules('post', 'Post', 'required');

        if ($this->form_validation->run() == FALSE) {
            //the input didnt validate :(
            $this->post();

        }
        else {
            //$this->load->database();
            $this->load->model('admin_handling');

            if($query = $this->admin_handling->post_blog()) {

                // load view pages go awesomegoodneess $this-load->view
                echo 'post success. i meant to do something else here.';

            }
            else {
                $this->post();

            }
        }
    }

    function settings() {



        $data['main_content'] = 'admin_settings';
        $this->load->view('admin_defaults/main', $data);
    }

    function is_logged_in() {
        $this->load->helper('url');
        $is_logged_in = $this->session->userdata('is_logged_in');

        if(!isset ($is_logged_in) || $is_logged_in != true) {

            redirect('admin');

        }



    }
}

?>
