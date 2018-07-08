<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mpengguna extends MY_Model 
{
	public function __construct()
	{
		parent::__construct();
	}
	
	public function get_all($limit = 20, $offset = 0, $type = 'result')
	{

		if($this->input->get('query') != '')
			$this->db->like('nip', $this->input->get('query'))
					 ->or_like('nama', $this->input->get('query'));

		if($type == 'result')
		{
			return $this->db->get('users', $limit, $offset)->result();
		} else {
			return $this->db->get('users')->num_rows();
		}
	}

	public function get($param = 0)
	{
		return $this->db->get_where('users', array('id' => $param))->row();
	}


	public function update($param = 0)
	{

		$get = $this->get();

		$config['upload_path'] = './public/images/';
		$config['allowed_types'] = 'gif|jpg|png';
		
		$this->upload->initialize($config);
		
		if ( ! $this->upload->do_upload('file_foto')) 
		{
			$this->template->alert(
				$this->upload->display_errors('<span>','</span>'), 
				array('type' => 'success','icon' => 'check')
			);
			$gambar = $get->photo;
			
		} else {

			if($get->photo != 'Tidak Ada')
				unlink("public/images/{$get->photo}");

			$gambar = $this->upload->file_name;
		}
		$data = array(
			'first_name' => $this->input->post('first_name'),
			'last_name' => $this->input->post('last_name'),
			'phone' => $this->input->post('no_tlp'),
			'email' => $this->input->post('email'),
			'phone' => $this->input->post('phone'),
			'photo' => $gambar			
		);
		if($this->input->post('new_pass') != '') 
			$data['password'] = password_hash($this->input->post('new_pass'), PASSWORD_DEFAULT);

		$this->db->update('users', $data, array('id' => $this->input->post('id')));

		if($this->db->affected_rows())
		{
			$this->template->alert(
				' Data Pengguna berhasil disimpan.', 
				array('type' => 'success','icon' => 'check')
			);
		} else {
			$this->template->alert(
				' Gagal menyimpan data.', 
				array('type' => 'warning','icon' => 'times')
			);
		}
	
		}
		//  else {
			
		// 	$this->template->alert(
		// 		' Password Lama Anda Salah.', 
		// 		array('type' => 'danger','icon' => 'times')
		// 		);
		// }

	//}

	public function update_user($param = 0)
	{
		$user = array(
			'nip' => $this->input->post('nip'),
			'first_name' => $this->input->post('first_name'),
			'last_name' => $this->input->post('last_name'),
			'active' => $this->input->post('status'),
		);

		$this->db->update('users', $user, array('id' => $param));

		if($this->db->affected_rows())
		{
			$this->template->alert(
				' Data Pengguna berhasil di update.', 
				array('type' => 'success','icon' => 'check')
			);
		} else {
			$this->template->alert(
				' Gagal menyimpan data.', 
				array('type' => 'warning','icon' => 'times')
			);
		}
	}		
}

/* End of file Mpengguna.php */
/* Location: ./application/models/Mpengguna.php */