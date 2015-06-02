<?php

class User_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    //Permite la auntenticacion de un usuario en el sistema
    function authenticate($nombreUsuario, $contrasenna) {
        $this->db->where('Nombre_Usuario', $nombreUsuario);
        $this->db->where('Contrasenna', sha1($contrasenna));
        $query = $this->db->get('Usuario');
        if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return null;
        }
    }

    function getUsers() {
        $query = $this->db->get('Usuario');
        if ($query->num_rows() > 0) {
            return $query;
        } else {
            return false;
        }
    }

    //Permite registrar usuarios en la base de datos
    function insert_user($nombre, $nombreUsuario, $contrasenna) {
        $data = array(
            'Nombre' => $nombre,
            'Nombre_Usuario' => $nombreUsuario,
            'Contrasenna' => sha1($contrasenna)
        );
        $this->db->insert('Usuario', $data);
    }

    //Permite eliminar a un usuario en especifico
    function delete_user($id) {
        $data = array(
            'Id' => $id
        );
        $this->db->delete('Usuario', $data);
    }

    //Permite detallar a un usuario en especifico
    function details($pId) {
        $this->db->where("Id", $pId);
        $query = $this->db->get('Usuario');
        if ($query->num_rows() > 0) {
            return $query;
        } else {
            return null;
        }
    }

}
