<?php /* By Bryan W Pearson */

class Gallery extends Controller {


    function index() {

        $data['main_content'] = 'todo';
        $this->load->view('main_defaults/main', $data);
        
    }





}
?>
