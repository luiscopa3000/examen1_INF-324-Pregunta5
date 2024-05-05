<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cuenta extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Cuenta_model');
        $this->load->helper('url');
    }

    public function index() {
        $data['cuentas'] = $this->Cuenta_model->obtener_cuentas();
        $this->load->view('listado_cuentas', $data);
    }

    public function borrar() {
        $nro_cuenta = $this->input->post('nro_cuenta');
        echo $nro_cuenta;
        if ($this->Cuenta_model->borrar_cuenta($nro_cuenta)) {
            echo "Borrado";
            redirect('');
        } else {
            echo "Error al borrar la cuenta.";
        }
    }
    public function getUsuarios() {
        echo "Hola mundo";
    }
}
?>
