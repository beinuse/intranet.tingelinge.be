<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff extends CI_Controller {

    /* Staff overview controller */
    public function index(){
        if($this->session->logged_in === TRUE){

            $userid = $this->session->user_id;
            $data['staffID'] = $this->staff_model->get_staff($userid);
            $data['staff'] = $this->staff_model->get_staff();
            $data['title'] = 'Overzicht personeel';
            $data['currentDateTime'] = date('l, d/m/Y');
            
            $this->load->view('templates/header_staff');
            $this->load->view('templates/leftnav', $data);
            $this->load->view('staff/index', $data);
            $this->load->view('templates/footer_staff');

        } else {

            redirect('users/login');
        }
    }

    /* Staff detailed view controller */
    public function view($staffID = NULL){
        if($this->session->logged_in === TRUE){

            $userid = $this->session->user_id;
            $data['staffID'] = $this->staff_model->get_staff($userid);
            $data['staff'] = $this->staff_model->get_staff($staffID);
            $data['title'] = 'Detail personeel';
            $data['currentDateTime'] = date('l, d/m/Y');
            
            if(empty($data['staff'])) {
                show_404();
            }

            $this->load->view('templates/header_staff');
            $this->load->view('templates/leftnav', $data);
            $this->load->view('staff/view', $data);
            $this->load->view('templates/footer_staff');

        } else {

            redirect('users/login');
        }
    }

    /* Staff edit controller */
    public function edit($staffID){
        if($this->session->logged_in === TRUE){

            $userid = $this->session->user_id;
            $data['staffID'] = $this->staff_model->get_staff($userid);
            $data['staff'] = $this->staff_model->get_staff($staffID);
            $data['title'] = 'Detail personeel';
            $data['currentDateTime'] = date('l, d/m/Y');
            
            if(empty($data['staff'])) {
                show_404();
            }

            $this->load->view('templates/header_staff');
            $this->load->view('templates/leftnav', $data);
            $this->load->view('staff/edit', $data);
            $this->load->view('templates/footer_staff');

        } else {

            redirect('users/login');
        }
    }

    public function update(){
        $this->staff_model->update_staff();
        redirect('staff');
    }

    /* Staff create controller */
    public function create(){ 
        if($this->session->logged_in === TRUE){

            $userid = $this->session->user_id;
            $data['staffID'] = $this->staff_model->get_staff($userid);
            $data['staff'] = $this->staff_model->get_staff($staffID);
            $data['title'] = 'Detail personeel';
            $data['currentDateTime'] = date('l, d/m/Y');

            $this->form_validation->set_rules('Lastname', 'Achternaam', 'required');
            $this->form_validation->set_rules('Firstname', 'Voornaam', 'required');
            $this->form_validation->set_rules('JobTitle', 'Functie', 'required');
            $this->form_validation->set_rules('Status', 'Status', 'required');
            $this->form_validation->set_rules('Address', 'Adres', 'required');
            $this->form_validation->set_rules('Zipcode', 'Postcode', 'required');
            $this->form_validation->set_rules('City', 'Stad / Gemeente', 'required');
            $this->form_validation->set_rules('Country', 'Land', 'required');
            $this->form_validation->set_rules('PhoneMobile', 'GSM', 'required');
            $this->form_validation->set_rules('EmailWork', 'Email werk', 'required');

            if($this->form_validation->run() === FALSE){
                $this->load->view('templates/header_staff');
                $this->load->view('templates/leftnav', $data);
                $this->load->view('staff/create', $data);
                $this->load->view('templates/footer_staff');    
            } else {
                $this->staff_model->create_staff();
                redirect('staff');
            }
         } else {

            redirect('users/login');
        }   
    }

    /* Staff work schedule overview controller */
    public function roster($page = 'roster'){
        if($this->session->logged_in === TRUE){

            if(!file_exists(APPPATH.'views/staff/' .$page. '.php')){
                show_404();
            }

            $userid = $this->session->user_id;
            $data['staffID'] = $this->staff_model->get_staff($userid);
            $data['title'] = 'Overzicht werkrooster';
            $data['currentDateTime'] = date('l, d/m/Y');

            $this->load->view('templates/header_staff');
            $this->load->view('templates/leftnav', $data);
            $this->load->view('staff/'.$page, $data);
            $this->load->view('templates/footer_staff');
            
        } else {

            redirect('users/login');
        }  

    }

    /* Staff work schedule overview controller */
    public function schedule(){
        if($this->session->logged_in === TRUE){

            $userid = $this->session->user_id;
            $data['staffID'] = $this->staff_model->get_staff($userid);
            $data['title'] = 'Overzicht werkrooster';
            $data['currentDateTime'] = date('l, d/m/Y');

            $this->load->view('templates/header_staff');
            $this->load->view('templates/leftnav', $data);
            $this->load->view('staff/schedule', $data);
            $this->load->view('templates/footer_staff');
            
        } else {

            redirect('users/login');
        }  

    }
}