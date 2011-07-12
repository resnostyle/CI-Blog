<?php /* By Bryan W Pearson */

class Post extends CI_Controller
{
    private function Home()
    {
        parent::__construct();

    }

    function index($post_id)
    {
        $this->load->database();
        $this->load->helper('form');

        $this->load->model('main_handling');
        $query = $this->main_handling->post_comment_page($post_id);

        $data['Posts'] = $query;

        $data['main_content'] = 'comment_post';

        $this->load->view('main_defaults/main', $data);
    }

    function submit_comment()
    {
        $this->load->helper('date');
        $this->load->library('form_validation');
        $this->form_validation->set_message('required', 'The %s space looks blank.');
        $this->form_validation->set_rules('name', 'name', 'trim|required');
        $this->form_validation->set_rules('comment', 'comment', 'trim|required');

        if ($_POST['sneaky'] == "")
        { //i believe this person is spam bot

            if ($this->form_validation->run() == FALSE)
            {
                //this person didnt validate
                $this->index();
            }

            else
            {
                //its passed, insert to db
                $this->load->database();
                $this->load->model('main_handling');

                if($query = $this->main_handling->comment_post())
                {

                    $this->index();
                }
                else
                {
                    echo 'it worked, something cool later on';
                }
            }

        }
        else
        {
            echo 'Youve made a terrible mistake. I am very sorry.';
        }
    }

}


/* End of file post.php */