<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Persona extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Persona_model');
    }

    public function index() {
        $data['persona'] = $this->Persona_model->obtener_personas();
        $this->load->view('listado_personas', $data);
    }

    public function borrar($nro_cuenta) {
        if ($this->Cuenta_model->borrar_cuenta($nro_cuenta)) {
            redirect('cuenta');
        } else {
            echo "Error al borrar la persona.";
        }
    }
}
?>
