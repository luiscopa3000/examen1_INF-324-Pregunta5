<?php
class Transaccion_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function obtener_personas() {
        return $this->db->get('trransaccion')->result_array();
    }
    public function transaccion_cuenta($nro_cuenta) {
        $this->db->where('nro_cuenta', $nro_cuenta);
        return $this->db->get('transaccion')->result_array();
    }
    
    public function borrar_persona($nro_cuenta) {
        $this->db->where('ci_persona', $nro_cuenta);
        $this->db->delete('persona');
        return ($this->db->affected_rows() > 0);
    }
}
?>
