<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /home.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index() {
        $this->load->view('home');
    }

    public function about_us() {
        $this->load->view('about');
    }

    public function ad_contact() {
        if ($this->input->post()) {
            $this->load->model('contact_model');

            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $phone = $this->input->post('phone');
            $message = $this->input->post('message');

            $data = array(
                "name" => $name,
                "email" => $email,
                "phone" => $phone,
                "message" => $message
            );

            $insert_id = $this->contact_model->add($data);
            if($insert_id){
                $data_html['msg'] = "successfully Sent details";
                $this->load->view('home', $data_html);
            }
        }
    }

}
