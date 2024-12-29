<?php 
class User extends CI_Controller{

	function __construct(){
        parent::__construct();
        $this->load->model('Mcrud');
        $this->load->model('Mproduct');
        $this->load->library('session');
        $this->load->library('upload');
        $this->load->library('cart');
    }

	public function index() {
		$this->load->view('user/form_login');
	}

    public function dashboard()
	{
		if(empty($this->session->userdata('username'))){
			redirect('user');
		}
		$data['menu'] = $this->Mcrud->get_all_data('menu')->result();
        $this->template->load('layout_user','user/index', $data);
	}


	public function login() {
		$this->load->view('user/form_login');
	}

	public function aksi_login(){
		$this->load->model('Mlogin');
		$u=$this->input->post('username');
		$p=$this->input->post('password');

		$cek=$this->Mlogin->cek_login_user($u, $p)->num_rows();
		if($cek==1){
			$data_session=array(
				'username' => $u,
				'status'=>"login"
			);
			$this->session->set_userdata($data_session);
			redirect('user');
		} else {
			echo $this->session->set_flashdata('msg','Username or Password is Wrong </br>');
			redirect('user');
		}
	}



	public function check_login(){
            $data = $this->input->post();
            $result = $this->Mcrud->check_login($data['username'], $data['password'])->row_array();
            if($result != NULL ){
                // $this->session->set_flashdata('success', "Registrasi Berhasil, Silahkan Login"); 
                $userdata = array(
                    'id_user'   => $result['id_user'],
                    'username'  => $result['username'],
                    'password'     => $result['password'],
                    'logged_in' => TRUE
            );
            
            $this->session->set_userdata($userdata);
                redirect('user/dashboard');
            } else {
                $this->session->set_flashdata('error', "Username atau Password anda salah, Silahkan Ulangi Kembali");
                redirect('user/form_login');
            }
        }

        public function logout(){
            unset(
                $_SESSION['user_id'],
                $_SESSION['username'],
                $_SESSION['email'],
                $_SESSION['logged_in']
            );

            $this->template->load('layout_new','user/index', $data);
        }

	public function register(){
		$this->load->view('user/register');
	}

	public function act_reg(){
		$this->load->library('form_validation');

		$this->form_validation->set_rules('nama', 'nama', 'trim|required');
		$this->form_validation->set_rules('email', 'email', 'trim|required|valid_email');
		$this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
		$this->form_validation->set_rules('no_tlp', 'no_tlp', 'trim|required');
		$this->form_validation->set_rules('username', 'username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');	
		

		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('pesan',validation_errors());
			redirect('user/register');
		}
		else{
			$nama=$this->input->post('namaKonsumen');
			$email=$this->input->post('email');
			$username=$this->input->post('username');
			$password=$this->input->post('password');
			$alamat=$this->input->post('alamat');
			$kota=$this->input->post('kota');
			$no_telepon=$this->input->post('no_telepon');
			$data_insert=array('namaKonsumen'=>$nama,
								'password'=>$password,
								'username'=>$username,
								'namaKonsumen'=>$nama,
								'alamat'=>$alamat,
								'idKota'=>$kota,
								'email'=>$email,
								'tlpn'=>$no_telepon,
								'statusAktif'=>'Y');
			$this->Mcrud->insert_reg($data_insert);
			redirect('user/login');
		}
	}


	public function addtocar($id){
            $this->load->helper('date');
            $product = $this->Mcrud->get_product_by_id($id)->result();

            $data_order['idKonsumen'] = $this->session->userdata('idKonsumen');
            $data_order['tglOrder'] = now('');
            $data_order['statusOrder'] = 'Belum Bayar';
            

            $result = $this->Mcrud->insert('detail_beli', $data_order);
            var_dump($result);


        }

    public function add(){

		 $data['produk'] = [
            "id"    => $_POST["product_id"],
            "name"  => $_POST["product_name"],
            "qty"   => $_POST["qty"],
            "price" => $_POST["product_price"]
        ];
        $this->cart->insert($data); // return row id
        echo $this->view();

        }


	public function save(){
            $data = $this->input->post();
            $this->Mcrud->insert('user', $data);
            redirect('user/login');

        }

	public function detail($id){
		$dataWhere=array('idProduk'=>$id);
		$data['produk']=$this->Mcrud->get_by_id('menu',$dataWhere)->row_object();
		$this->template->load('layout_user','user/detail', $data);
	}

	public function cart(){
		redirect('cart');
	}

	public function addToCart($id){
        $product = $this->Mproduct->getRows($id);

        $data = array(
            'id'    => $product['id_menu'],
            'qty'    => 1,
            'price'    => $product['harga_menu'],
            'name'    => $product['nama_menu'],
            'image' => $product['gambar']
        );
        $this->cart->insert($data);

        redirect('cart/',$data);
    }

	public function about_new(){
		$data['produk'] = $this->Mcrud->get_all_data('menu')->result();
        $data['kategori'] = $this->Mcrud->get_all_data('tbl_kategori')->result();
		$this->template->load('layout_new','user/about', $data);
	}

	public function about(){
		$this->template->load('layout_user','user/about');
	}
	public function booking(){
		$this->template->load('layout_user','user/booking');
	}

	public function produk(){
		$data['menu'] = $this->Mcrud->get_all_data('menu')->result();
		$this->template->load('layout_user','user/produk', $data);
	}

	public function checkout(){
		redirect('checkout');
	}

	public function save_checkout(){
			$idProduk = $this->input->post('idProduk');
			$jumlah = $this->input->post('jumlah');
			$harga = $this->input->post('harga');
			$dataInsert = array(
				'idProduk'=>$idProduk,
				'jumlah' =>$jumlah,
				'harga' =>$harga
			);
			$this->Mcrud->insert('detail_beli', $dataInsert);
			// redirect('kategori');
			if ($this->db->affected_rows()) {
                $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible show fade" role="alert">
                Checkout Product Success!
                <div class="alert-body">
                <button class="close" data-dismiss="alert">
                <span>&times;</span>
                </button></div></div>');
            	redirect('user');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible show fade" role="alert">
                Checkout Product Failed!
                <div class="alert-body">
                <button class="close" data-dismiss="alert">
                <span>&times;</span>
                </button></div></div>');
                redirect('user');
            }
		}

	public function tambah_ke_keranjang($id)
    {
        $barang=$this->model_barang->find($id);


        $data = array(
            'id'      => $barang->idProduk,
            'qty'     => $barang->qty,
            'price'   => $barang->harga,
            'name'    => $barang->namaProduk
    );
    
    $this->cart->insert($data);
    $this->template->load('layout_user','keranjang', $data);
    // $this->load->view('keranjang');
    // redirect('welcome');
    }
	
	public function detail_keranjang()
	{
        $this->template->load('layout_user','cart');
    }
	
	public function hapus_keranjang()
	{
		$this->cart->destroy();
		redirect('user/index');
	}


	public function aksisimpan_bookuser(){
		$nama=$this->input->post('nama');
		$nohp=$this->input->post('nohp');
		$email=$this->input->post('email');
		$person=$this->input->post('person');
		$amount=$this->input->post('amount');
		$idmenu=$this->input->post('id_menu');
		$date=$this->input->post('date');
		$id_user=$this->input->post('id_user');
		$data=array(
			'nama' => $nama,
			'nohp' => $nohp,
			'email' => $email,
			'person' => $person,
			'jmlmeja' => $amount,
			'id_menu' => $id_menu,
			'tgl' => $date,
			'id_user' => $id_user	
		);
		$this->M_login->insert_book($data);
		if($this->db->affected_rows()){
			redirect('user/booking');	
		}else{
			redirect('user/booking');
		}
	}

		public function book(){
			//user
			$idmenu=$this->input->post('id_menu');
				$namamenu=$this->input->post('nama_menu');			
				$menu=array('menu'=>$this->Mcrud->get_idmenu());
				$this->load->view('booking', $menu);
		}
}
?>