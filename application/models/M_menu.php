<?php 
	defined('BASEPATH') OR exit('No direct script access alowed');

	class M_menu extends CI_Model {
		public function getDataMenu()
		{
			$this->db->select('*');
			$this->db->from('menu');
			return $this->db->get()->result();
            
		}

        public function getDataMenuRel(){
//             SELECT menu.nama_menu, sum(relasicart_menu.qty) as total
// FROM `menu`
// LEFT JOIN relasicart_menu ON relasicart_menu.id_menu = menu.id
// JOIN cart ON cart.id = relasicart_menu.id_cart
// WHERE cart.id_user = 1   
// GROUP BY relasicart_menu.id


        }
	}
?>