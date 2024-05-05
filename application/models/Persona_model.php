<?php
class Persona_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function obtener_personas() {
        return $this->db->get('persona')->result_array();
    }
    public function obtener_persona_ci($ci) {
        $this->db->where('ci', $ci);
        return $this->db->get('persona')->result_array();
    }
    
    public function borrar_persona($nro_cuenta) {
        $this->db->where('ci_persona', $nro_cuenta);
        $this->db->delete('persona');
        return ($this->db->affected_rows() > 0);
    }
}
?>
