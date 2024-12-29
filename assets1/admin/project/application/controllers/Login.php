<?php 
class Login extends CI_Controller{

	public function aksi_login(){
		$this->load->model('Mlogin');
		$u=$this->input->post('username');
		$p=$this->input->post('password');

		$cek=$this->Mlogin->cek_login($u, $p)->num_rows();
		if($cek==1){
			$data_session=array(
				'userName' => $u,
				'status'=>"login"
			);
			$this->session->set_userdata($data_session);
			redirect('adminpanel/dashboard');
		} else {
			echo $this->session->set_flashdata('msg','Username or Password is Wrong </br>');
			redirect('adminpanel');
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('adminpanel');
	} 
}
?>