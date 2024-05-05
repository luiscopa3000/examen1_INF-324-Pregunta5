<?php
class Cuenta_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function obtener_cuentas() {
        $this->db->select('cuenta.*, persona.nombres, persona.paterno, persona.materno');
        $this->db->from('cuenta');
        $this->db->join('persona', 'cuenta.ci = persona.ci', 'left');
        return $this->db->get()->result_array();
    }

    public function borrar_cuenta($nro_cuenta) {
        $data = array(
            'status' => 0
        );
    
        $this->db->where('nro_cuenta', $nro_cuenta);
        $this->db->update('cuenta', $data);
        
        return ($this->db->affected_rows() > 0);
    }
}
?>
