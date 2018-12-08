<?php

class HomeController extends CI_Controller {

    public function Index() {
        $data['content'] = 'admin/home/index';
        $data['title'] = 'ahihi';
        $this->load->model('HomeModel');
        $data['models'] = $this->HomeModel->getData();
        $this->load->view("admin/templates/layout_admin", $data);
    }

    public function Feedback() {
        echo 'Feedback';
    }

}

?>
