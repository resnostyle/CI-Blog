<?php /* By Bryan W Pearson */

class Calendar extends CI_Controller {


    function index() {

        $data['main_content'] = 'todo';
        $this->load->view('main_defaults/main', $data);

    }





}
?>
