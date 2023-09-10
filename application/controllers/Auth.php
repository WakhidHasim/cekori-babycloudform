<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_auth', 'm_auth');
    }

    public function index()
    {
        if ($this->session->userdata('email')) {
            redirect('dashboard');
        }

        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data = [
                'title' => 'Login',
                'page' => 'pages/auth/login/index',
                'email' => $this->input->post('email')
            ];

            $this->load->view('layouts/auth/app', $data, false);
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->m_auth->login($email);

        if ($user) {
            if (password_verify($password, $user['password'])) {
                $data = [
                    'id_user' => $user['id_user'],
                    'email' => $user['email'],
                ];

                $this->session->set_userdata($data);

                redirect('dashboard');
            } else {
                $this->session->set_flashdata('failed_email', $this->input->post('email'));
                $this->session->set_flashdata('failed', 'Your password is incorrect!');
                redirect('login');
            }
        } else {
            $this->session->set_flashdata('failed', 'Email Not Registered !');
            redirect('login');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('id_user');
        $this->session->unset_userdata('email');

        $this->session->set_flashdata('success', 'You have successfully logged out!');
        redirect('login');
    }
}
