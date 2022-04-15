<!--MODELS-->
<?php 
class M_data extends CI_Model{
	function show_data(){
		return $this->db->get('users');
	}
}
?>
