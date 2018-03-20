<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

    /* Login controller */
    public function login(){
        $this->form_validation->set_rules('username', 'Gebruikersnaam', 'required');
        $this->form_validation->set_rules('password', 'Wachtwoord', 'required');

        $data['username'] = $this->input->post('username');

        if($this->form_validation->run() === FALSE){
                $this->load->view('users/login', $data);
            } else {

                // Get username
                $username = $this->input->post('username');

                // Get and encrypt the password
                $password = md5($this->input->post('password'));

                // Login user
                $user_id = $this->user_model->login($username, $password);

                if($user_id){
                    // Create session
                    $user_data = array(
                        'user_id' => $user_id,
                        'username' => $username,
                        'logged_in' => true
                    );

                    $this->session->set_userdata($user_data);

                    // Set message SUCCESS
                    $this->session->set_flashdata('user_loggedin', 'You are now logged in');

                    redirect('dashboard/view');
                } else {
                    // Set message FAIL
                    $this->session->set_flashdata('user_failed', 'Je gebruikersnaam of password zijn niet correct');

                    redirect('users/login');
                }
            }
        }
    // Log user out
    public function logout(){
        // Unset user data
        $this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('username');

        // Set message
        $this->session->set_flashdata('user_loggedout', 'You are now logged out');

        redirect('users/login');
    }
}   