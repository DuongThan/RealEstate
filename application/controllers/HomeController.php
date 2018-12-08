<?php
    class HomeController extends CI_Controller{
        public function Index(){
            $data['val'] = "Ahihi hi hi";
            $data['arr'] = array("1","2");
            $data['content'] = 'HomeView';
            $data['title'] = 'ahihi';
            $this->load->model('HomeModel');
            $data['models'] = $this->HomeModel->getData();
            $this->load->view("templates/layout",$data);
        }
        public function Feedback(){
            echo 'Feedback';
        }
    }
?>


