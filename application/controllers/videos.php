<?php /* By Bryan W Pearson */

class Videos extends Controller {


    function index() {

        $data['main_content'] = 'videos';
        $this->load->view('main_defaults/main', $data);

    }





}
?>
