<?php 
	defined('BASEPATH') OR exit('No direct script access alowed');

	class M_cart extends CI_Model {
		public function CekCart($id_user)
		{
			$this->db->select('*');
			$this->db->from('cart');
			$this->db->where('id_user',$id_user);
			$x = $this->db->get()->result();
            if (count($x) > 0){
                return true;
            } else {
                return false;
            }
		}
        public function InsertCart($data)
		{
			$this->db->insert('cart',$data);
            if ($this->db->affected_rows()>0){
                return true;
            } else {
                return false;
            }
		}
        public function getIDcart($id_user)
		{
			$this->db->select('*');
			$this->db->from('cart');
			$this->db->where('id_user',$id_user);
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