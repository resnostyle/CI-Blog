<?php /* By Bryan W Pearson */


class Error extends Controller {

    function error_404() {
        $this->output->set_status_header('404');

        $data['main_content'] = 'main_defaults/404';
        $this->load->view('main_defaults/main', $data);

    }
}
?>
