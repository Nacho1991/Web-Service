<?php

class Ftp extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->library('ftp');
        $this->ftp->connect();
        $this->ftp->close();
        $datos['titulo'] = 'Conexion FTP';
        $datos['contenido'] = 'ftp';
        $this->load->view('plantillas/header');
        $this->load->view('files/files');
    }

    public function upload() {
        $this->load->library('ftp');
        $this->ftp->connect();
        $this->ftp->upload('./license.txt', 'nombreDelArchivo.txt', 'auto', '0775');
        $this->ftp->close();
        $this->load->view('plantillas/header');
        $this->load->view('files/upload');
    }

    public function download() {
        $this->load->library('ftp');
        $this->ftp->connect();
        $this->ftp->download('html_public', './aplicacionDescarga.txt');
        $this->ftp->close();
        $this->load->view('plantillas/header');
        $this->load->view('files/download');
    }

    public function rename() {
        $this->load->library('ftp');
        $this->ftp->connect();
        $this->ftp->rename('html_public', 'Se cambio el nombre.txt');
        $this->ftp->close();
        $this->load->view('plantillas/header');
        $this->load->view('files/rename');
    }

    public function move() {
        $this->load->library('ftp');
        $this->ftp->connect();
        $this->ftp->move('nombreDelArchivo', 'Directorio/nombreDelArchivo');
        $this->ftp->close();
    }

    public function delete() {
        $this->load->library('ftp');
        $this->ftp->connect();
        $this->ftp->delete_dir('Directorio');
        $this->ftp->delete_file('Se cambio el nombre.txt');
        $this->ftp->close();
    }

    public function create() {
        $this->load->library('ftp');
        $this->ftp->connect();
        $this->ftp->mkdir('Nuevo', '0777');
        $this->ftp->close();
    }

    public function listfile() {
        $this->load->library('ftp');
        $this->ftp->connect();
        $list = array(
            'lista' => $this->ftp->list_files('')
        );
        $this->ftp->close();
        $this->load->view('plantillas/header');
        $this->load->view('files/listfile', $list);
    }

}
