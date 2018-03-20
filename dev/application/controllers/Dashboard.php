<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function view($page = 'view'){
        if(!file_exists(APPPATH.'views/dashboard/' .$page. '.php')){
            show_404();
        }

        $userid = $this->session->user_id;
        $data['staffID'] = $this->staff_model->get_staff($userid);
        $data['title'] = 'Dashboard';
        $data['currentDateTime'] = date('l, d/m/Y');

        $this->load->view('templates/header_dashboard');
        $this->load->view('templates/leftnav', $data);
        $this->load->view('dashboard/'.$page, $data);
        $this->load->view('templates/footer_dashboard');
    }
}