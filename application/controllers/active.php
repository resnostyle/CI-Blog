<?php /* By Bryan W Pearson */

class Active extends CI_Controller
{

    function  __construct()
    {
        parent::__construct();
        $this->is_logged_in();
        $this->load->helper('url');
        $this->load->helper('form');
    }

    function index()
    {
        $this->load->database();
        $this->load->model('main_handling');

        $query = $this->main_handling->recent_posts(10, 0);
        $data['Posts'] = $query;
        $data['main_content'] = 'active';
        $this->load->view('admin_defaults/main', $data);
    }

    function post()
    {
        //for creating a blog post

        $data['main_content'] = 'admin_post';
        $this->load->view('admin_defaults/main', $data);
    }

    function posted()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_message('required', 'Is the %s field empty?');
        $this->form_validation->set_rules('date', 'Date', 'trim|required');
        $this->form_validation->set_rules('title', 'Title', 'trim|required');
        $this->form_validation->set_rules('post', 'Post', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            //the input didnt validate :(
            $this->post();
        }
        else
        {
            $this->load->database();
            $this->load->model('admin_handling');

            if($query = $this->admin_handling->post_blog())
            {
                // load view pages go awesomegoodneess $this-load->view
                echo 'great success, awesomeness here';
                //$data['main_content'] = 'modules/success';
                //$data['message'] = "Your post when throughly spendidly. What to do now?";
                //$this->load->view('admin_defaults/main', $data);

            }
            else
            {
                $this->post();
            }
        }
    }

    function settings()
    {
        $data['main_content'] = 'admin_settings';
        $this->load->view('admin_defaults/main', $data);
    }

    private function is_logged_in()
    {
        $this->load->helper('url');
        $is_logged_in = $this->session->userdata('is_logged_in');

        if(!isset ($is_logged_in) || $is_logged_in != true)
        {
            redirect('admin');
        }
    }
}

/* End of file active.php */