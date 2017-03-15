<?php 
class Arturo_model extends CI_Model {

        
        public function getUsuarios($id)
        {
                $query = $this->db->query("SELECT * FROM USUARIO WHERE ID_USER='$id' ");
                return $query->result();
        }
        public function checkUser($user,$pass){
        	$query=$this->db->query("SELECT * FROM USUARIO WHERE ID_USER='$user' AND PASS='$pass'");
        	if($query=FALSE){
        		
        	}
        }

       

}
?>
