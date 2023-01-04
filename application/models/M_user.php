<?php 
	defined('BASEPATH') OR exit('No direct script access alowed');

	class M_user extends CI_Model {
		public function getDataUser($data)
		{
			$this->db->select('*');
			$this->db->from('user');
			$this->db->where($data);
			$x = $this->db->get()->result();
            if (count($x) > 0){
                return true;
            } else {
                return false;
            }
		}
        public function getIDUser($username)
		{
			$this->db->select('*');
			$this->db->from('user');
			$this->db->where('username',$username);
			$x = $this->db->get()->result();
            if (count($x) > 0){
                foreach ($x as $y){
                    return $y->id;
                }
            } else {
                return false;
            }
		}
	}
?>