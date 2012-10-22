<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Logs extends CI_Controller {

    public function send_logs() {
        /*
        Cronjob this method
         */
        $this->load->spark('error_notifier/0.0.4');
        $this->error_notifier->send();
    }

    public function view(){
        if (!$this->ion_auth->is_admin())
        {
            $this->load->spark( 'fire_log/0.8.2');
        }
    }
}

/* End of file logs.php */
/* Location: ./application/controllers/logs.php */