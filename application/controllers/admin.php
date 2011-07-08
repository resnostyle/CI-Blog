<?php
class Admin extends CI_Controller {

   public function Admin() {

        parent::__construct();
        $this->load->helper('url');
    }

    public function index() {
        $is_logged_in = $this->session->userdata('is_logged_in');
        if(!isset ($is_logged_in) || $is_logged_in != true) {
            $this->load->helper('form');
            $data['main_content'] = 'admin_login';
            $this->load->view('admin_defaults/main', $data);
        }
        else {
            redirect('active');
        }
    }

    function login() {
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->form_validation->set_message('required', 'Sweetheart, is %s empty?');
        $this->form_validation->set_rules('user_name', 'Username', 'trim|required|xss_clean');
        $this->form_validation->set_rules('pass_word', 'Password', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            //this person didnt validate
            $this->index();
        }

        else {
            //validated but needs checking against the db
            $this->load->database();
            $this->load->model('admin_handling');
            $query = $this->admin_handling->login();

            if($query) {
                $data = array(
                        'username' => $this->input->post('user_name'),
                        'is_logged_in' => true
                );
                $this->session->set_userdata($data);
                redirect('active');
            }
            else {
                $this->index();
            }
        }

    }


    public function logout() {
        $this->session->sess_destroy();
        $this->index();
    }


}


