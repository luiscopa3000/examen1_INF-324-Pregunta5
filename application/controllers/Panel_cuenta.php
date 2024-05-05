<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Panel_cuenta extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Cuenta_model');
        $this->load->model('Persona_model');
        $this->load->model('Transaccion_model');
        $this->load->helper('url');
    }

    public function index() {
        $ci = $this->input->post('ci');
        $data['personas'] = $this->Persona_model->obtener_persona_ci($ci);
        $data['nro_cuenta'] = $this->input->post('nro_cuenta');
        $this->load->view('listado_cuentas_panel', $data);

        $nro_cuenta = $this->input->post('nro_cuenta');
        $data1['transacciones'] = $this->Transaccion_model->transaccion_cuenta($nro_cuenta);
        $this->load->view('listado_transaccion', $data1);
    }

    public function borrar($nro_cuenta) {
        
        if ($this->Cuenta_model->borrar_cuenta($nro_cuenta)) {
            redirect('cuenta');
        } else {
            echo "Error al borrar la cuenta.";
        }
    }
    
    public function getUsuarios() {
        $dato = $this->input->post('dato');
    }
}
?>
