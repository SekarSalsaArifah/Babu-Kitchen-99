<?php 
class User extends CI_Controller{

	function __construct(){
        parent::__construct();
        $this->load->model('Mcrud');
        $this->load->library('session');
        $this->load->library('upload');
        $this->load->library('cart');
        $this->load->model('model_barang');
    }

    public function index(){
        $data['produk'] = $this->Mcrud->get_all_data('tbl_produk')->result();
        $data['kategori'] = $this->Mcrud->get_all_data('tbl_kategori')->result();
        $this->template->load('layout_new','user/index_guest', $data);
    }

    public function dashboard()
	{
		if(empty($this->session->userdata('username'))){
			redirect('user');
		}
		$data['produk'] = $this->Mcrud->get_all_data('tbl_produk')->result();
        $data['kategori'] = $this->Mcrud->get_all_data('tbl_kategori')->result();
        $this->template->load('layout_user','user/index', $data);
	}

	public function album_user(){
        $data['produk'] = $this->Mcrud->get_all_data('tbl_produk')->result();
        $data['kategori'] = $this->Mcrud->get_all_data('tbl_kategori')->result();
        $this->template->load('layout_user','user/album', $data);
    }

    public function album_new(){
        $data['produk'] = $this->Mcrud->get_all_data('tbl_produk')->result();
        $data['kategori'] = $this->Mcrud->get_all_data('tbl_kategori')->result();
        $this->template->load('layout_new','user/album', $data);
    }

	public function login() {
		$this->load->view('user/form_login');
	}

	// public function aksi_login(){
	// 	$this->load->model('Mlogin');
	// 	$u=$this->input->post('username');
	// 	$p=$this->input->post('password');

	// 	$cek=$this->Mlogin->cek_login_user($u, $p)->num_rows();
	// 	if($cek==1){
	// 		$data_session=array(
	// 			'username' => $u,
	// 			'status'=>"login"
	// 		);
	// 		$this->session->set_userdata($data_session);
	// 		redirect('user/dashboard');
	// 	} else {
	// 		echo $this->session->set_flashdata('msg','Username or Password is Wrong </br>');
	// 		redirect('user');
	// 	}
	// }

	// public function logout(){
	// 	$this->session->sess_destroy();
	// 	redirect('user');
	// }

	public function check_login(){
            $data = $this->input->post();
            $result = $this->Mcrud->check_login($data['username'], $data['password'])->row_array();
            if($result != NULL ){
                // $this->session->set_flashdata('success', "Registrasi Berhasil, Silahkan Login"); 
                $userdata = array(
                    'idKonsumen'   => $result['idKonsumen'],
                    'username'  => $result['username'],
                    'email'     => $result['email'],
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
		$data['kota']=$this->Mcrud->get_all_data('tbl_kota')->result();
		$data['kategori']=$this->Mcrud->get_all_data('tbl_kategori')->result();
		// $data['kota']=$this->Mcrud->get_all_kota()->result();
		// $data['kategori']=$this->Mcrud->get_all_kategori()->result();
		$this->load->view('user/register',$data);
	}

	// public function login(){
	// 	$data['kategori']=$this->Mfrontend->get_all_kategori()->result();
	// 	$this->template->load('layout_frontend','frontend/login',$data);
	// }

	public function act_reg(){
		$this->load->library('form_validation');

		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');
		$this->form_validation->set_rules('password_confirm', 'Password Confirmation', 'trim|required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
		$this->form_validation->set_rules('no_telepon', 'No Telepon', 'trim|required');

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

        // public function login(){
        //     $data['kategori'] = $this->Mcrud->get_all_data('tbl_kategori')->result();
        //     $this->template->load('layout_member','member/login', $data);
        // }


        // public function register(){
        //     $data['kategori'] = $this->Mcrud->get_all_data('tbl_kategori')->result();
        //     $this->template->load('layout_member','member/register',$data);
        // }

        // public function dashboard(){
        //     $data['kategori'] = $this->Mcrud->get_all_data('tbl_kategori')->result();
        //     $this->template->load('layout_member','member/dashboard', $data);

        // }

	public function addtocar($id){
            $this->load->helper('date');
            $product = $this->Mcrud->get_product_by_id($id)->result();

            $data_order['idKonsumen'] = $this->session->userdata('idKonsumen');
            $data_order['tglOrder'] = now('');
            $data_order['statusOrder'] = 'Belum Bayar';
            

            $result = $this->Mcrud->insert('tbl_detail_order', $data_order);
            var_dump($result);

            

            // $data_detail_oder['idProduk'] = 
            // $data_detail_oder['idProduk'] = 
            // $data_detail_oder['jumlah'] = 
            // $data_detail_oder['harga'] = 
        }

    public function add(){
            // $this->load->helper('date');

            // $product = $this->Mcrud->get_product_by_id($id)->result();

            // $idProduk= $this->input->post($product);
            // $dataInsert=array($product=>$idProduk);

            // $result = $this->Mcrud->insert('tbl_detail_order', $dataInsert);
            // redirect('user/dashboard');
            // var_dump($result);

       	// $idDetailOrder=$this->input->post('idDetailOrder');
       	// $idOrder=$this->input->post('idOrder');
       	// $idProduk=$this->input->post('idProduk');
       	// $jumlah=$this->input->post('jumlah');
       	// $harga=$this->input->post('harga');
		 $data['produk'] = [
            "id"    => $_POST["product_id"],
            "name"  => $_POST["product_name"],
            "qty"   => $_POST["quantity"],
            "price" => $_POST["product_price"]
        ];
        $this->cart->insert($data); // return row id
        echo $this->view();

            // $data_detail_oder['idProduk'] = 
            // $data_detail_oder['idProduk'] = 
            // $data_detail_oder['jumlah'] = 
            // $data_detail_oder['harga'] = 
        }

 //        public function add(){
	// 	$this->template->load('layout_admin','admin/kota/form_add');
	// }

	public function save(){
            $data = $this->input->post();

            if($data['password'] != $data['password-confirm']){
                var_dump("error");
            } else {
                unset($data['password-confirm']);
                $status = $this->Mcrud->insert('tbl_member', $data);   
                if($status != NULL ){
                    $this->session->set_flashdata('success', "Registrasi Berhasil, Silahkan Login"); 
                    redirect('home/login');
                } else {
                    $this->session->set_flashdata('error', "Registrasi Gagal, Silahkan Ulangi Kembali");
                    redirect('home/register');
                }
            }

        }

	public function detail($id){
		$dataWhere=array('idProduk'=>$id);
		$data['produk']=$this->Mcrud->get_by_id('tbl_produk',$dataWhere)->row_object();
		$this->template->load('layout_user','user/detail', $data);
	}

	public function cart(){
		$data['detailorder'] = $this->Mcrud->get_all_data('tbl_detail_order')->result();
		$this->template->load('layout_user','user/cart', $data);
	}

	public function about_new(){
		$data['produk'] = $this->Mcrud->get_all_data('tbl_produk')->result();
        $data['kategori'] = $this->Mcrud->get_all_data('tbl_kategori')->result();
		$this->template->load('layout_new','user/about', $data);
	}

	public function about_user(){
		$data['produk'] = $this->Mcrud->get_all_data('tbl_produk')->result();
        $data['kategori'] = $this->Mcrud->get_all_data('tbl_kategori')->result();
		$this->template->load('layout_user','user/about', $data);
	}

	public function checkout(){
		$data['produk'] = $this->Mcrud->get_all_data('tbl_produk')->result();
		$data['member'] = $this->Mcrud->get_all_data('tbl_member')->result();
        $data['detailorder'] = $this->Mcrud->get_all_data('tbl_detail_order')->result();
		$this->template->load('layout_new','user/form_checkout', $data);
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
			$this->Mcrud->insert('tbl_detail_order', $dataInsert);
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
            'qty'     => 1,
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
        $this->template->load('layout_user','keranjang');
    }
	
	public function hapus_keranjang()
	{
		$this->cart->destroy();
		redirect('user/index');
	}

	public function pembayaran()
	{
		$data['kurir']=$this->Mcrud->get_all_data('tbl_kurir')->result();
        $this->template->load('layout_user','pembayaran',$data);
    }
	
	public function proses_pesanan()
	{
		// $data = $this->input->post();
		// $target_dir = "./uploads/";
  //       $extension  = pathinfo( $_FILES["foto"]["name"], PATHINFO_EXTENSION );
  //       $target_name = $data['nama']."-foto.".$extension;
  //       $_FILES["foto"]["name"] = $target_name;

  //       // var_dump($foto);
  //       $target_file = $target_dir . basename($_FILES["foto"]["name"]);
  //       move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file);

  //       $data['foto'] = $target_name;
  //       $status = $this->Mcrud->insert('tbl_pembayaran', $data);
		// $nama = $this->input->post('nama');
		// $alamat = $this->input->post('alamat');
		// $tlp = $this->input->post('tlp');
		// $idKurir = $this->input->post('idKurir');
		// $dataInsert = array(
		// 	'nama'=>$nama,
		// 	'alamat' =>$alamat,
		// 	'tlp' =>$tlp,
		// 	'idKurir' =>$idKurir,
		// 	'foto' =>$foto
		// );
		// $this->Mcrud->insert('tbl_detail_order', $dataInsert);
		// redirect('');
 		$this->template->load('layout_user','proses_pesanan');
			
	}

	// public function detail($id_brg)
	// {
	// 	$data['barang'] = $this->model_barang->detail_brg($id_brg);
	// 	$this->load->view('templates/header');
 //        $this->load->view('templates/sidebar');
 //        $this->load->view('detail_barang', $data);
 //        $this->load->view('templates/footer');
	// }
}
?>