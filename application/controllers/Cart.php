<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('M_menu');
        $this->load->model('M_cart');
        $this->load->model('M_user');
        $this->load->model('M_relasicart_menu');
    }

	public function index()
	{
		$data = [];
        $data['menu'] = $this->M_menu->getDataMenu();
        $data['relasi'] = $this->M_relasicart_menu->GetAllrelasi($this->M_user->getIDUser($this->session->userdata('username')));
        // $data['olist'] = $this->M_relasicart_menu->getOrderList($this->M_user->getIDUser($this->session->userdata('username')));
        $this->load->view('V_cart', $data);
	}
    public function AddItem(){
        //mengecek ke database apakah keranjang sudah dibuat untuk user tertentu
        $id_user =$this->M_user->getIDUser($this->session->userdata('username'));
        $id_menu =$this->input->post('id_menu');
        if($this->input->post('opt')=='plus'){
            if ($this->M_cart->CekCart($id_user)){
                //kalau terdapat keranjang maka menu akan ditambahakan ke dalam relasi
                $id_cart =$this->M_cart->getIDcart($id_user);
                if($this->M_relasicart_menu->CekRelasi($id_menu, $id_cart)){
                    //kalau menu sudah terdaftar dalam keranjang maka quantiy ditambah 
                    $data_relasi =$this->M_relasicart_menu->getIDrelasi($id_cart, $id_menu);
                    $new_relasi = [
                        'qty' => $data_relasi['qty']+1
                    ];
                    if($this->M_relasicart_menu->Updaterelasi($new_relasi,$data_relasi['id'])){
                        redirect('/Cart');
    
                    }
                    else{
                        //menampilkan pesan error
                        $data['error'] = 'Gagal menambahkan Item';
                        $this->index();
                $this->load->view('V_cart',$data);
                    }
    
                }else{
                    //kalau menu belum terdapat di dalam keranjang maka membuat relasi baru
                    $new_relasi = [
                        'id' => null,
                        'id_cart' => $id_cart,
                        'qty' => 1,
                        'id_menu' => $id_menu
    
                    ];
                    if($this->M_relasicart_menu->Insertrelasi($new_relasi)){
                        redirect('/Cart');
    
                    }
                    else{
                        //menampilkan pesan error saat xampp mati
                        $data['error'] = 'Gagal menambahkan Item';
                        $this->index();
                $this->load->view('V_cart',$data);
                    }
    
    
                }
    
            }else{
                //jika belum terdapat keranjang maka akan membuat keranjang terlebih dahulu
                $data= [
                    'id'=> null,
                    'id_user' => $id_user,
                    'create_at' => date('Y-m-d h:i:s')
                ];
                
                if($this->M_cart->InsertCart($data)){
                    //jika berhasil membuat keranjang akan menambahkan relasi
                    $id_cart =$this->M_cart->getIDcart($id_user);
                    if($this->M_relasicart_menu->CekRelasi($id_menu, $id_cart)){
                        //kalau menu sudah terdaftar dalam keranjang maka quantiy ditambah 
                        $data_relasi =$this->M_relasicart_menu->getIDrelasi($id_user, $id_menu);
                        $new_relasi = [
                            'qty' => $data_relasi['qty']+1
                        ];
                        if($this->M_relasicart_menu->Updaterelasi($new_relasi,$data_relasi['id'])){
                            redirect('/Cart');
    
                        }
                        else{
                            //menampilkan pesan error
                            $data['error'] = 'Gagal menambahkan Item';
                        $this->index();
                $this->load->view('V_cart',$data);
                        }
    
                    }else{
                        //kalau menu belum terdapat di dalam keranjang maka membuat relasi baru
                        $new_relasi = [
                            'id' => null,
                            'id_cart' => $id_cart,
                            'qty' => 1,
                            'id_menu' => $id_menu
    
                        ];
                        if($this->M_relasicart_menu->Insertrelasi($new_relasi)){
                            redirect('/Cart');
    
                        }
                        else{
                            //menampilkan pesan error
                            $data['error'] = 'Gagal menambahkan Item';
                        $this->index();
                $this->load->view('V_cart',$data);
                        }
    
    
                    }
    
                    
    
                }else{
                    //jika gagal membuat keranjang akan menampilkan pesan error
                    $data['error'] = 'Gagal menambahkan Item';
                        $this->index();
                $this->load->view('V_cart',$data);
                    
                }
            }
            
        } else{
            //digunkan sat kurangi ITEm
            if ($this->M_cart->CekCart($id_user)){
                //kalau terdapat keranjang maka menu akan ditambahakan ke dalam relasi
                $id_cart =$this->M_cart->getIDcart($id_user);
                if($this->M_relasicart_menu->CekRelasi($id_menu, $id_cart)){
                    //kalau menu sudah terdaftar dalam keranjang maka quantiy ditambah 
                    $data_relasi =$this->M_relasicart_menu->getIDrelasi($id_cart, $id_menu);
                    if($data_relasi['qty'] != 0){
                        $new_relasi = [
                            'qty' => $data_relasi['qty']-1
                        ];
                        if($this->M_relasicart_menu->Updaterelasi($new_relasi,$data_relasi['id'])){
                            redirect('/Cart');
        
                        }
                        else{
                            //menampilkan pesan error
                            $data['error'] = 'Gagal menambahkan Item';
                            $this->index();
                    $this->load->view('V_cart',$data);
                        }

                    }
                    else{
                        $data['error'] = 'Gagal menambahkan Item';
                            $this->index();
                    $this->load->view('V_cart',$data);
                    }
                    
    
                }else{
                    //menampilkan pesan error
                    $data['error'] = 'Item belum dipesan';
                    $this->index();
            $this->load->view('V_cart',$data);
                    
                }
    
            }

        }

       
    }
}