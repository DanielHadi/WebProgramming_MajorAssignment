<?php 
	defined('BASEPATH') OR exit('No direct script access alowed');

	class M_relasicart_menu extends CI_Model {
        public function CekRelasi($id_menu, $id_cart)
		{
            $condition =[
                'id_cart' => $id_cart,
                'id_menu' => $id_menu
            ];

			$this->db->select('*');
			$this->db->from('relasicart_menu');
			$this->db->where($condition);
			$x = $this->db->get()->result();
            if (count($x) > 0){
                return true;
            } else {
                return false;
            }
		}
        public function getIDrelasi($id_cart, $id_menu)
		{
			$condition =[
                'id_cart' => $id_cart,
                'id_menu' => $id_menu
            ];

			$this->db->select('*');
			$this->db->from('relasicart_menu');
			$this->db->where($condition);
			$x = $this->db->get()->result();
            if (count($x) > 0){
                foreach ($x as $y){
                    $data =[
                        'id' => $y->id,
                        'qty' => $y->qty
                    ];
                    return $data;
                }
            } else {
                return false;
            }
		}
        public function Updaterelasi($data, $id)
		{
            $this->db->where('id',$id);
			$this->db->update('relasicart_menu',$data);
            if ($this->db->affected_rows()>0){
                return true;
            } else {
                return false;
            }
		}
        public function Insertrelasi($data)
		{
			$this->db->insert('relasicart_menu',$data);
            if ($this->db->affected_rows()>0){
                return true;
            } else {
                return false;
            }
		}
        public function GetAllrelasi($id_user){
            $this->db->select('relasicart_menu.qty,relasicart_menu.id_menu');
            $this->db->from('relasicart_menu');
            $this->db->join('cart', 'cart.id = relasicart_menu.id_cart');
            $this->db->where('cart.id_user',$id_user);
            return $this->db->get()->result();

        }
		public function getOrderList($id_user){
//             SELECT menu.nama_menu, relasicart_menu.qty, (relasicart_menu.qty * menu.harga) as Total FROM `relasicart_menu`
// JOIN menu ON menu.id = relasicart_menu.id_menu
// JOIN cart ON cart.id = relasicart_menu.id_cart
// WHERE cart.id_user = 1

        }
	}
?>