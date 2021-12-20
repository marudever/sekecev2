<?php 

	class Artikel extends CI_Controller
	{

			public function __construct(){
				parent::__construct();
				$this->load->model('M_artikel');
				$this->load->model('M_kategori');
				$this->load->model('M_suka');
				$this->load->model('M_user');
			}

		public function ke_edit($id)
		{

			$this->load->model('M_freelancer');

			$data['judul'] 		= "Halaman Edit Artikel";
			$data['artikel'] 	= $this->M_artikel->get_where($id)->row();
			$data['kategori'] 	= $this->M_kategori->get()->result();
			$data['freelancer'] 	= $this->M_freelancer->get()->result();

			$where = array(
				'id_user' => $this->session->userdata('user_id')
			);
			$data['data_freelancer'] = $this->M_freelancer->get_where_custom($where)->row();

			$this->load->view('admin/freelancer/template/header', $data);
			$this->load->view('admin/'.$this->session->userdata('level').'/edit_artikel', $data);
			$this->load->view('admin/freelancer/template/footer', $data);

		}


		public function publishkan($id)
		{

			$data = array(
				'status'	=> 1
			);

			$update = $this->M_artikel->edit($id, $data);

				if($update){
					$this->session->set_flashdata('pesan', 'Berhasil Publish Artikel');
					redirect(base_url('mystore'));
				}else{
					$this->session->set_flashdata('pesan', 'Gagal Publish Artikel');
					redirect(base_url('mystore'));
				}

		}


		public function draftkan($id)
		{

			$data = array(
				'status'	=> 0
			);

			$update = $this->M_artikel->edit($id, $data);

				if($update){
					$this->session->set_flashdata('pesan', 'Berhasil Draft Artikel');
					redirect(base_url('mystore'));
				}else{
					$this->session->set_flashdata('pesan', 'Gagal Draft Artikel');
					redirect(base_url('mystore'));
				}

		}


		public function tambah()
		{

			// Upload
				$config['upload_path']          = './assets/thumbnail/';
                $config['allowed_types']        = 'gif|jpg|png';

                $this->load->library('upload', $config);

                if ( !$this->upload->do_upload('foto'))
                { // Jika Upload Gagal
                        echo "Gagal";
                }
                else
                { // Jika Upload Berhasi;
						if ($this->upload->do_upload('foto'))
						{ 
							$data  = $this->upload->data($this->input->post('foto'));
							$fileName  = $data['file_name'];
						}

						if ($this->upload->do_upload('foto1'))
						{ 
							$data1  = $this->upload->data($this->input->post('foto1'));
							$fileName1  = $data1['file_name'];
						}

						if ($this->upload->do_upload('foto2'))
						{ 
							$data2  = $this->upload->data($this->input->post('foto2'));
							$fileName2  = $data2['file_name'];
						}

						if ($this->upload->do_upload('foto3'))
						{ 
							$data3  = $this->upload->data($this->input->post('foto3'));
							$fileName3  = $data3['file_name'];
						}

						$slug = str_replace(' ', '-', $this->input->post('slug'));

						if($this->input->post('0') !== null){

							$status = '0';

						} elseif($this->input->post('1') !== null) {

							$status = '1';

						}

						$data = array(
							'judul'				=> $this->input->post('judul'),
							'slug'				=> $slug,
							'gambar'			=> $fileName,
							'gambar1'			=> $fileName1,
							'gambar2'			=> $fileName2,
							'gambar3'			=> $fileName3,
							'harga'				=> $this->input->post('harga'),
							'isi'				=> $this->input->post('isi'),
							'kategori'			=> $this->input->post('kategori'),
							'tag'				=> $this->input->post('tag'),
							'tanggal'			=> date('Y-m-d'),
							'status'			=> $status,
							'freelancer'			=> $this->input->post('freelancer')
						);
						
                }
               	
                $insert = $this->M_artikel->tambah($data);

               	if($insert){
					$this->session->set_flashdata('pesan', 'Berhasil Menambah Artikel');
					redirect(base_url('mystore'));
				}else{
					$this->session->set_flashdata('pesan', 'Gagal Menambah Artikel');
					redirect(base_url('mystore'));
				}

		}


		public function hapus($id)
		{

			// Ambil Data
			$data = $this->M_artikel->get_where($id)->row();

			// Hapus Thumbnail(Foto)
			$thumbnail = $data->gambar;
			$path = APPPATH.'../assets/thumbnail/'.$thumbnail;
			unlink($path);

			// Hapus di DataBase
			$hapus = $this->M_artikel->hapus($id);

			if($hapus){
					$this->session->set_flashdata('pesan', 'Berhasil Menghapus Artikel');
					redirect(base_url('mystore'));
				}else{
					$this->session->set_flashdata('pesan', 'Gagal Menghapus Artikel');
					redirect(base_url('mystore'));
				}


		}


		public function edit($id)
		{		

				if(!empty($_FILES['foto']['name'])): // Jika thumbnai mau diubah

					// Upload
					$config['upload_path']          = './assets/thumbnail/';
	                $config['allowed_types']        = 'gif|jpg|png';

	                $this->load->library('upload', $config);

	                if ( ! $this->upload->do_upload('foto'))
	                { // Jika Upload Gagal
	                        echo "Gagal";
	                }
	                else
	                { // Jika Upload Berhasi;

						if ($this->upload->do_upload('foto'))
						{ 
							// Hapus Thumbnail Lama
		                	$thumbnail = $this->input->post('gambar_sekarang');
							$path = APPPATH.'../assets/thumbnail/'.$thumbnail;
							unlink($path);

	                        $data = $this->upload->data($this->input->post('foto'));
							$fileName = $data['file_name'];
						}

						if ($this->upload->do_upload('foto1'))
						{ 
							// Hapus Thumbnail Lama
		                	$thumbnail = $this->input->post('gambar_sekarang1');
							$path = APPPATH.'../assets/thumbnail/'.$thumbnail;
							unlink($path);

							$data1  = $this->upload->data($this->input->post('foto1'));
							$fileName1  = $data1['file_name'];
						}

						if ($this->upload->do_upload('foto2'))
						{ 
							// Hapus Thumbnail Lama
		                	$thumbnail = $this->input->post('gambar_sekarang2');
							$path = APPPATH.'../assets/thumbnail/'.$thumbnail;
							unlink($path);

							$data2  = $this->upload->data($this->input->post('foto2'));
							$fileName2  = $data2['file_name'];
						}

						if ($this->upload->do_upload('foto3'))
						{ 
							// Hapus Thumbnail Lama
		                	$thumbnail = $this->input->post('gambar_sekarang3');
							$path = APPPATH.'../assets/thumbnail/'.$thumbnail;
							unlink($path);
							
							$data3  = $this->upload->data($this->input->post('foto3'));
							$fileName3  = $data3['file_name'];
						}

					}

				endif;


				if($this->input->post('0') !== null){

					$status = '0';

				} elseif($this->input->post('1') !== null) {

					$status = '1';

				} else {

					$status = $this->input->post('status');

				}

				$slug = str_replace(' ', '-', $this->input->post('slug'));


				if(!empty($_FILES['foto']['name'])):

					$data = array(
						'judul'				=> $this->input->post('judul'),
						'slug'				=> $slug,
						'gambar'			=> $fileName,
						'gambar1'			=> $fileName1,
						'gambar2'			=> $fileName2,
						'gambar3'			=> $fileName3,
						'isi'				=> $this->input->post('isi'),
						'kategori'			=> $this->input->post('kategori'),
						'tag'				=> $this->input->post('tag'),
						'status'			=> $status,
						'freelancer'		=> $this->input->post('freelancer')
					);

				else:

					$data = array(
						'judul'				=> $this->input->post('judul'),
						'slug'				=> $slug,
						'isi'				=> $this->input->post('isi'),
						'kategori'			=> $this->input->post('kategori'),
						'tag'				=> $this->input->post('tag'),
						'status'			=> $status,
						'freelancer'		=> $this->input->post('freelancer')
					);

				endif;

				$edit = $this->M_artikel->edit($id, $data);

				if($edit){
					$this->session->set_flashdata('pesan', 'Berhasil Mengedit Artikel');
					redirect(base_url('mystore'));
				}else{
					$this->session->set_flashdata('pesan', 'Gagal Mengedit Artikel');
					redirect(base_url('mystore'));
				}

		}






		public function order($id, $slug, $idf, $harga)
		{

			$data = array(
				'id_artikel' 	=> $id,
				'id_freelancer'	=> $idf,
				'id_users'		=> $this->session->userdata('user_id'),
				'harga'			=> $harga
			);



			$table = 'payment';
			$insert = $this->M_suka->tambah($table, $data);



			if($insert){
				$this->session->set_flashdata('ostat', 'Pesanan Telah di Order');
			}else{
				$this->session->set_flashdata('ostat', 'Oops Gagal');
			}
			redirect('pages/'.$slug);

		}

	}

 ?>