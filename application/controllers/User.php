<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('User_model', 'user');
    }

    public function profile() {
        $user = $this->session->userdata('user');
        if ($user) {
            $data = array(
                'usuario' => $user
            );
            $this->load->view('plantillas/header');
            $this->load->view('User/profile', $data);
        } else {
            $this->login();
        }
    }

    public function index() {
        $user = $this->session->userdata('user');
        if ($user) {
            $data = array(
                'usuario' => $user,
                'users' => $this->user->getUsers()
            );
            $this->load->view('plantillas/header');
            $this->load->view('User/index', $data);
        } else {
            $this->login();
        }
    }

    public function login() {
        $this->load->view('plantillas/header');
        $this->load->view('User/login');
    }

    public function nuevo() {
        $user = $this->session->userdata('user');
        if (!$user) {
            $this->load->view('plantillas/header');
            $this->load->view('User/login');
        } else {
            $data = array(
                'usuario' => $user
            );
            $this->load->view('plantillas/header');
            $this->load->view('User/new', $data);
        }
    }

    public function registrar() {
        $user = $this->session->userdata('user');
        if (!$user) {
            $this->load->view('plantillas/header');
            $this->load->view('User/login');
        } else {
            $name = $this->input->post('nombre');
            $username = $this->input->post('nombreusuario');
            $password = $this->input->post('contrasenna');
            $verificar_password = $this->input->post('verificarcontrasenna');
            if ($password === $verificar_password) {
                $this->user->insert_user($name, $username, $password);
                redirect("User/index", "refresh");
            }
        }
    }

    //Este metodo nos permite eliminar a un usuario seleccionado
    public function delete($id) {
        $user = $this->session->userdata('user');
        //Validamos si el usuario ha iniciados sesion
        if (!$user) {
            //En caso de nos estarlo se envia hacia la vista del login
            $this->load->view('plantillas/header');
            $this->load->view('User/login');
        } else {
            //En caso de estar loguado
            //Se llama al metodo eliminar que se encuentra en el modelo de usuarios
            $this->user->delete_user($id);
            //Una vez eliminado el usuario se carga la plantilla y la vista princiapl
            $this->load->view('plantillas/header');
            redirect('User/index', 'refresh');
        }
    }

    public function detalles($pId) {
        $user = $this->session->userdata('user');
        //Validamos si el usuario ha iniciado sesion
        if (!$user) {
            //En caso de nos estar loguado lo devuelve hacia la vista del login
            $this->load->view('plantillas/header');
            $this->load->view('User/login');
        } else {
            //En caso de haber iniciado sesion
            //Este arreglo almacena todos los detalles de un usuario
            $data = $this->user->details($pId);


            return $data;
        }
    }

    public function dashboard() {
        $user = $this->session->userdata('user');
        if (!$user) {
            $this->load->view('plantillas/header');
            $this->load->view('User/login');
        } else {
            $data = array(
                'usuario' => $user,
            );
            $this->load->view('plantillas/header');
            $this->load->view('User/dashboard', $data);
        }
    }

    public function authenticate() {
        //Variables necesarios para el logueo
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        // llamamos al modelo User y el método de authenticate
        $user = $this->user->authenticate($username, $password);
        //Validamos si existe el usuario
        if ($user) {
            //En caso de existir se envia esos datos para mantener la sesion abierta
            $this->session->set_userdata('user', $user);
            //Este arreglo alamcena todos los datos informativos de forma general de los registros
            $data = array(
                'usuario' => $user,
                'users' => $this->user->getUsers()
            );
            $this->load->view('plantillas/header');
            $this->load->view('User/dashboard', $data);
        } else {
            $this->login();
        }
    }

    public function logout() {
        //Destruimos la sesion con este metodo
        $this->session->sess_destroy();
        //Redireccionamos hacia el login
        $this->login();
    }

}
